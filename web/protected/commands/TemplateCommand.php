<?php
include_once(Yii::getPathOfAlias('webroot') . '/../../src/GeraTemplate.php');

class TemplateCommand extends CConsoleCommand {

	public function actionIndex(){
		$img = Yii::getPathOfAlias('webroot') . '/../../data/gerarTemplate/a.jpg';
		$g = new GeraTemplate('TEMPLATE_1');
		$g->gerarTemplate($img,$this->getConfig());
	}

	private function getConfig(){
		 return [
		  'nome' => 'template teste tj 100',
	      'regioes' => [
	        [ # bloco de questões
	          'p1' => [0,1450],    # Em pixel
	          'p2' => [2300,2700],  # Em pixel
	          'colunasPorLinha' => 20,
	          'agrupaObjetos' => 5,
	          'minArea' => 800,         # Em pixel
	          'maxArea' => 100000,      # Em pixel

	          # definição do id dos elementos
	          'id' => function($b,$l,$o) {
	            $idQuestao = str_pad($b*25 + $l+1,3,'0',STR_PAD_LEFT);
	            return 'e-'.$idQuestao.'-'.($o+1);
	          },
	          # tipo da região (cada tipo requer parametros diferentes ...) // TODO: criar definição dos tipos
	          'tipo' => 0, // TODO: criar constantes para os tipos
	          # especifico para elementos de match (com saida true|false, exemplo: elipses)
	          'casoTrue' => function($b,$l,$o) { 
	            switch ($o){
	              case 0: return 'A';
	              case 1: return 'B';
	              case 2: return 'C';
	              case 3: return 'D';
	              case 4: return 'E';
	            }
	          },
	          'casoFalse' => 'W',
	        ],
	        [ # elipse ausente
	          'p1' => [2000,2900],    # Em pixel
	          'p2' => [2200,3200],  # Em pixel
	          'colunasPorLinha' => false,
	          'agrupaObjetos' => false,
	          'minArea' => 800,
	          'maxArea' => 100000,

	          'id' => 'eAusente',
	          'tipo' => 0,
	          'casoTrue' => 'A',
	          'casoFalse' => 'W',
	        ],
	      ],
	      'formatoSaida' => [
	        'ausente' => 'eAusente',
	        'respostas' => [
	          'match' => '/^e-.*-\d$/', # começa com 'e-' tem qualquer coisa ou nada no meio e termina com '-<inteitor>'
	          'order' => function($a,$b){
	            return $a > $b;          
	          }
	        ],
	      ],
	    ];
	}

}