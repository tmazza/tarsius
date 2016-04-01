<?php
# em milimetros
return array(
	'raioTriangulo' => (4.5 * sqrt(2)) / 2, # diagonal / 2
	'ancora1' => array(10.5, 10.5),
	'distAncHor' => 137.25-11.25,
	'distAncVer' => 198.75-11.25,
	# devem ser procisas
	'disElipHor' => 4.75,
	'disElipVer' => 71.55,

	'elpAltura' => 2.5 + 0.1,
  'elpLargura' => 4.5 + 0.1,

	'diagonal' => 228.5,
	'code_template' => array(103.5,0,126,3.5),
	'regioes' => array( # distancias relativas a ancora 1
	  # FORMATO: [distancia horizontal, distancia vertical, saida caso marcado, saida caso não marcado]
	  # linha 0
		array(0,4.75				,96.85,'A','W'),
		array(0,4.75+8.1		,96.85	,'B','W'),
		array(0,4.75+(2*8.1),96.85,'C','W'),
		array(0,4.75+(3*8.1),96.85,'D','W'),
		array(0,4.75+(4*8.1),96.85,'E','W'),
		# linha 1
		array(0,4.75				,96.85 + 3.95,'A','W'),
		array(0,4.75+8.1		,96.85 + 3.95,'B','W'),
		array(0,4.75+(2*8.1),96.85 + 3.95,'C','W'),
		array(0,4.75+(3*8.1),96.85 + 3.95,'D','W'),
		array(0,4.75+(4*8.1),96.85 + 3.95,'E','W'),
		# linha 2
		array(0,4.75				,96.85 + (4.00 * 2),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 2),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 2),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 2),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 2),'E','W'),
		# linha 3
		array(0,4.75				,96.85 + (4.00 * 3),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 3),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 3),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 3),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 3),'E','W'),
		# linha 4
		array(0,4.75				,96.85 + (4.00 * 4),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 4),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 4),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 4),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 4),'E','W'),
		# linha 5
		array(0,4.75					,96.85 + (4.00 * 5),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 5),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 5),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 5),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 5),'E','W'),
		# linha 6
		array(0,4.75					,96.85 + (4.00 * 6),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 6),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 6),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 6),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 6),'E','W'),
		# linha 7
		array(0,4.75					,96.85 + (4.00 * 7),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 7),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 7),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 7),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 7),'E','W'),
		# linha 8
		array(0,4.75					,96.85 + (4.00 * 8),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 8),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 8),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 8),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 8),'E','W'),
		# linha 9
		array(0,4.75					,96.85 + (4.00 * 9),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 9),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 9),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 9),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 9),'E','W'),
		# linha 10
		array(0,4.75					,96.85 + (4.00 * 10),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 10),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 10),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 10),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 10),'E','W'),
		# linha 11
		array(0,4.75					,96.85 + (4.00 * 11),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 11),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 11),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 11),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 11),'E','W'),
		# linha 12
		array(0,4.75					,96.85 + (4.00 * 12),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 12),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 12),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 12),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 12),'E','W'),
		# linha 13
		array(0,4.75					,96.85 + (4.00 * 13),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 13),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 13),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 13),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 13),'E','W'),
		# linha 14
		array(0,4.75					,96.85 + (4.00 * 14),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 14),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 14),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 14),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 14),'E','W'),
		# linha 15
		array(0,4.75					,96.85 + (4.00 * 15),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 15),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 15),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 15),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 15),'E','W'),
		# linha 16
		array(0,4.75					,96.85 + (4.00 * 16),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 16),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 16),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 16),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 16),'E','W'),
		# linha 17
		array(0,4.75					,96.85 + (4.00 * 17),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 17),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 17),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 17),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 17),'E','W'),
		# linha 18
		array(0,4.75					,96.85 + (4.00 * 18),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 18),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 18),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 18),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 18),'E','W'),
		# linha 19
		array(0,4.75			,96.85 + (4.00 * 19),'A','W'),
		array(0,4.75+8.1		,96.85 + (4.00 * 19),'B','W'),
		array(0,4.75+(2*8.1),96.85 + (4.00 * 19),'C','W'),
		array(0,4.75+(3*8.1),96.85 + (4.00 * 19),'D','W'),
		array(0,4.75+(4*8.1),96.85 + (4.00 * 19),'E','W'),

		#outra couna

		# linha 26
		array(0,44.5+4.99			 ,96.85 + (4.00 * 0),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 0),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 0),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 0),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 0),'E','W'),
		# linha 26
		array(0,44.5+4.99			   ,96.85 + (4.00 * 1),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 1),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 1),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 1),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 1),'E','W'),
		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 2),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 2),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 2),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 2),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 2),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 3),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 3),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 3),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 3),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 3),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 4),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 4),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 4),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 4),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 4),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 5),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 5),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 5),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 5),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 5),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 6),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 6),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 6),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 6),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 6),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 7),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 7),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 7),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 7),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 7),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 8),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 8),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 8),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 8),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 8),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 9),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 9),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 9),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 9),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 9),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 10),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 10),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 10),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 10),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 10),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 11),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 11),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 11),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 11),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 11),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 12),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 12),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 12),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 12),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 12),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 13),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 13),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 13),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 13),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 13),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 14),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 14),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 14),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 14),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 14),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 15),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 15),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 15),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 15),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 15),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 16),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 16),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 16),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 16),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 16),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 17),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 17),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 17),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 17),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 17),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 18),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 18),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 18),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 18),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 18),'E','W'),

		# linha 26
		array(0,44.5+4.99			 	 ,96.85 + (4.00 * 19),'A','W'),
		array(0,44.5+4.99+8.1		 ,96.85 + (4.00 * 19),'B','W'),
		array(0,44.5+4.99+(2*8.1),96.85 + (4.00 * 19),'C','W'),
		array(0,44.5+4.99+(3*8.1),96.85 + (4.00 * 19),'D','W'),
		array(0,44.5+4.99+(4*8.1),96.85 + (4.00 * 19),'E','W'),


		# linhas em branco para fechar template
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),
		array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),array(0,0,0,'W','W'),



	),
);