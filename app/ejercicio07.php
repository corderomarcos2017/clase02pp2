
<?php
/* 7-(IF) de tres números ingresados indicar el número del medio o informar si NO hay número del medio, 

Ej:   

3,5, 7    número del medio =5 

3,7, 5	número del medio =5 

5,3, 7	número del medio =5 

5, 7,3	número del medio =5 

7,5,3	número del medio =5 

7,3, 5	número del medio =5 

7,7,7 no tiene  

7,7,5 no tiene 

5,7,5 no tiene

*/

	//defino 3 variables para comprar
	$n1 = rand(1,100);
	$n2 = rand(1,100);
	$n3 = rand(1,100);
	// Muestro el contenido de las tres variables
	echo " El numero 1 es : $n1 <br> ";
	echo " El numero 2 es : $n2 <br> ";
	echo " El numero 3 es : $n3 <br> <br>";

	if ($n1<>$n2 && $n1<>$n3 && $n2<>$n3) {

		if(($n1 > $n2 && $n1 < $n3) || ($n1 < $n2 && $n1 > $n3)) 	{
			$medio=$n1;
		} else {
			if (($n2 > $n1 && $n2 < $n3) || ($n2 < $n1 &&  $n2 > $n3)) {
				$medio=$n2;
			} else 	{
				if (($n3 > $n1 && $n3 < $n2) || ($n3 < $n1 && $n3 > $n2)){
                	$medio=$n3;					
				}

			}
		}
		$medio;
		echo "$n1, $n2, $n3 el medio es : $medio";
	}else {
		echo "$n1, $n2, $n3 no tiene";
	}

?>
