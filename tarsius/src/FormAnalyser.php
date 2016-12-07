<?php
/**
 * @author Tiago Mazzarollo <tmazza@email.com>
 */

namespace Tarsius;

use Tarsius\Math;

/**
 * Avaliador dos tipos de regiões que podem ser avaliadas na imagme
 */
class FormAnalyser
{
    use Math;

    const REGION_ELLIPSE = 0;
    const REGION_NUMERIC_OCR = 1;

    /**
     * @var Image $image Imagem a ser analisada
     */
    private $image;
    /**
     * @var Mask $mask Máscara que deve ser aplicada na imagem.
     */
    private $mask;
    /**
     * @var array $anchors Conjunto de âncoras encontradas
     */
    private $anchors;
    /**
     * @var float $scale Resolução observada na imagem
     */
    private $scale;
    /**
     * @var float $rotation Rotação observada na imagem
     */
    private $rotation;

    /**
     * Instancia formulário a ser manipulado
     *
     * @param float &$image
     * @param float &$mask
     * @param float &$anchors
     * @param float &$scale
     * @param float &$rotation
     */
    public function __construct(&$image, &$mask, &$anchors, &$scale, &$rotation)
    {
        $this->image = $image;
        $this->mask = $mask;
        $this->anchors = $anchors;
        $this->scale = $scale;
        $this->rotation = $rotation;

        if (!is_dir(Tarsius::$runtimeDir)) {
            $old = umask(0);
            mkdir(Tarsius::$runtimeDir, 0777);
            umask($old);
        }

    }

    /**
     * Analisa regiões definidas na máscara de acordo com o seu tipo.
     * Avalia resultado para cada região definida em $mask, de acordo com 
     * o tipo da região e as condições de preenchimento definidas em Tarsius
     *
     * @return array Lista de regiões com ID da região como chave e o resultado
     *      da interpretaçõao e informações relevantes como valor.
     */
    public function evaluateRegions()
    {
        # DEBUG
        $copy = Tarsius::$enableDebug ? $this->image->getCopy() : null;
        
        $result = [];
        foreach ($this->mask->getRegions() as $id => $region) {
            $type = $region[0];
            if ($type == self::REGION_ELLIPSE) {
                $result[$id] = $this->evaluateEllipse($region, $copy);                
            } elseif($type == self::REGION_NUMERIC_OCR) {
                $result[$id] = $this->evaluateNumericOCR($region, $copy);                
            } else {
                throw new \Exception("Tipo de região '{$type}' desconhecido.");
            }
        }

        # DEBUG
        if (Tarsius::$enableDebug) {
            $this->image->save($copy, 'elipses');
        }
        return $result;
    }

    /**
     * Interpreta a região de uma ellipse. Conta a quantidade de pontos contidos na elipse
     * de centro em $center. 
     *
     * @param array &$region A definição de cada índice de $region deve ser:
     *      - 0: tipo da região (0 nesse caso)
     *      - 1 e 2: ponto definindo a região (não utilizado aqui)
     *      - 3: saída a ser retornada caso a região preenchida seja maior do que mínima
     *      - 4: saída a ser retornada caso a região preenchida não seja maior do que mínima
     *      - 5: (opcional) preenchimento mínimo. Caso não seja definido será 
     *           utilizado o valor em minMatch
     *      - 6: (opcional) Largura da elipse. Caso não seja definido será utilizado 
     *           o valor da classe Tarsius
     *      - 7: (opcional) Altura da elipse. Caso não seja definido será utilizado o valor 
     *           da classe Tarsius
     * @param resource $copy Copia de imagem sendo analusida. Usada somente caso 
     *      Tarsius::$enableDebug esteja ativo.
     *
     * @return array Resultado da região interpretada, taxa de preenchimento da região e 
     *      pontos após normalização
     */
    private function evaluateEllipse(&$region, &$copy)
    {
        $center = $this->getPointWithCorretion($this->applyResolution($region, $this->scale));   
        $minMatch = $region[5] ?? Tarsius::$minMatchEllipse;
        $elpWidth = $this->applyResolution($region[6] ?? $this->mask->getEllipseWidth(), $this->scale);
        $elpHeight = $this->applyResolution($region[7] ?? $this->mask->getEllipseHeight(), $this->scale);

        list($p1, $p2) = $this->image->createRectangle($center, $elpWidth/1.95, $elpHeight/1.95);
        $points = $this->image->getPointsBetween($p1, $p2);

        # verifica se um ponto esta dentro ou fora da elipse
        # equação da elipse | ((x-x0)^2 / a^2) + ((y0-y) / b^2), valores de y crescem 'para baixo' na imagem
        $insideElipse = function ($x,$y) use($center,$elpWidth,$elpHeight) {
          return (($x - $center[0])**2 / ($elpWidth/2)**2) + (($center[1]-$y)**2 / ($elpHeight/2)**2) <= 1;
        };

        # DEBUG
        if (Tarsius::$enableDebug) {
            $this->image->drawRectangle($copy, $p1, $p2);
        
            $observedArea = 0;
            foreach ($points as $x => $columns) {
                foreach ($columns as $y => $v) {
                    if($insideElipse($x, $y)){
                        $observedArea++;
                        $this->image->setPixel($copy, [$x, $y], [0,255,0]);
                    } else {
                        $this->image->setPixel($copy, [$x, $y], [0,0,255]);
                    }
                }
            }   
        } else {
            $observedArea = 0;
            foreach ($points as $x => $columns) {
                foreach ($columns as $y => $v) {
                    if($insideElipse($x, $y)){
                        $observedArea++;
                    }
                }
            }   
        }

        $expectedArea = pi() * ($elpWidth/2) * ($elpHeight/2);
        $fillRate = $observedArea / $expectedArea;

        return [
          $fillRate >= $minMatch ? $region[3] : $region[4],
          $fillRate,
          $center[0],
          $center[1],
        ];

    }

    /**
     * Retorna o ponto da região sendo analisada considerando a forma 
     * como o template foi gerado, usando 1, 2 ou as 4 âncoras como referência
     * para cada ponto.
     *
     */
    private function getPointWithCorretion($region)
    {
        if (4 == $this->mask->getNumAnchors()) {
            return $this->getQuadrupleReference($region);
        }
        return $this->getSingleReference($region);
    }

    /**
     * Define posição do ponto considerando sua âncora base.
     */
    private function getSingleReference($region)
    {
        $px = $region[1];
        $py = $region[2];

        # Define âncora base de acordo com o sinal das coordenadas dos pontos
        $base = $this->anchors[Mask::ANCHOR_TOP_LEFT]->getCenter();
        if($px < 0 && $py > 0){
          $base = $this->anchors[Mask::ANCHOR_TOP_RIGHT]->getCenter();
        } elseif($px < 0 && $py < 0){
          $base = $this->anchors[Mask::ANCHOR_BOTTOM_RIGHT]->getCenter();
        } elseif($px > 0 && $py < 0){
          $base = $this->anchors[Mask::ANCHOR_BOTTOM_LEFT]->getCenter();
        }
        # soma âncora base de cada ponto
        $px += $base[0];
        $py += $base[1];
        return $this->rotatePoint([$px,$py], $base, $this->rotation);
    }

    /**
     * Defini posição do ponto usando as quatros âncoras como referência.
     * Utiliza os pares de ancoras 1-3 e 2-4 para reduzir efeitos não planares.
     */
    private function getQuadrupleReference(&$region)
    {
        list($p1,$p3) = $region[1];
        list($p2,$p4) = $region[2];

        $anchor1 = $this->anchors[Mask::ANCHOR_TOP_LEFT]->getCenter();
        $anchor3 = $this->anchors[Mask::ANCHOR_TOP_RIGHT]->getCenter();
        $anchor2 = $this->anchors[Mask::ANCHOR_BOTTOM_RIGHT]->getCenter();
        $anchor4 = $this->anchors[Mask::ANCHOR_BOTTOM_LEFT]->getCenter();
        # soma âncora base de cada ponto
        $p1 = [bcadd($p1[0], $anchor1[0], 14), bcadd($p1[1], $anchor1[1], 14)];
        $p3 = [bcadd($p3[0], $anchor3[0], 14), bcadd($p3[1], $anchor3[1], 14)];
        $p2 = [bcadd($p2[0], $anchor2[0], 14), bcadd($p2[1], $anchor2[1], 14)];
        $p4 = [bcadd($p4[0], $anchor4[0], 14), bcadd($p4[1], $anchor4[1], 14)];
        # normaliza pontos considerando rotação
        $p1 = $this->rotatePoint($p1, $anchor1, $this->rotation);
        $p3 = $this->rotatePoint($p3, $anchor3, $this->rotation);
        $p2 = $this->rotatePoint($p2, $anchor2, $this->rotation);
        $p4 = $this->rotatePoint($p4, $anchor4, $this->rotation);
        # calcula pontos médios entre pares de âncoras
        $p13 = $this->getMidPoint($p1, $p3);
        $p24 = $this->getMidPoint($p2, $p4);
        return $this->getMidPoint($p13, $p24);
    }

    /**
     * Extraí conteúdo numérico da imagem considerando somente 
     * usando um alfabeto somente numérico. 
     *
     * @param array $region A definição de cada índice de $region deve ser:
     *      - 0: tipo da região (0 nesse caso)
     *      - 1 e 2: ponto definindo a região. Sendo 1 o ponto superior esquerdo 
     *        e p2 o ponto inferior direito. Ambos array no formato [x, y]
     * @param resource $copy Copia de imagem sendo analusida. Usada somente caso 
     *      Tarsius::$enableDebug esteja ativo.
     *
     * @return array Resultado da região interpretada e pontos após normalização
     */
    private function evaluateNumericOCR(&$region, &$copy)
    {
        $anchor1 = $this->anchors[Mask::ANCHOR_TOP_LEFT]->getCenter();
        $p1 = $this->rotatePoint($this->applyResolution($region[1], $this->scale), $anchor1, $this->rotation);
        $p2 = $this->rotatePoint($this->applyResolution($region[2], $this->scale), $anchor1, $this->rotation);
        
        $p1 = [bcadd($p1[0], $anchor1[0], 14), bcadd($p1[1], $anchor1[1], 14)];
        $p2 = [bcadd($p2[0], $anchor1[0], 14), bcadd($p2[1], $anchor1[1], 14)];

        if (Tarsius::$enableDebug) {
            $this->image->drawRectangle($copy, $p1, $p2);
        }       

        $filename = Tarsius::$runtimeDir . '/_' . md5(rand(0,9999).microtime(true)) . '.jpg';
        $this->image->cropAndCreate($filename, $p1, $p2);

        $cmd = "tesseract {$filename} -psm 8 stdout digits";
        $handle = popen($cmd, 'r');
        $output = trim(fread($handle, 2096));
        pclose($handle);
        
        
        if (!Tarsius::$enableDebug) {
            unlink($filename);
        }

        return [
            preg_replace('/[^0-9]/','', $output),
            $p1,
            $p2,
        ];
    }

}