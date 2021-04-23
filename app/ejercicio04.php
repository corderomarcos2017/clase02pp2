<?php
	//- pedir tres números informar el mayor de los tres  

	//defino 3 variables para comprar
	$numero1 = rand(1,100);
	$numero2 = rand(1,100);
	$numero3 = rand(1,100);
	// Muestro el contenido de las tres variables
	echo " El numero 1 es : $numero1 <br> ";
	echo " El numero 2 es : $numero2 <br> ";
	echo " El numero 3 es : $numero3 <br> <br>";

	/*Para buscar el mayor decido comparar las dos primeras para encontrar 
	  el mayor entre ellas dos y el valor lo guardo en la variable mayor */ 
	if ($numero1>$numero2) {
		$mayor = $numero1;
	} else {
		$mayor = $numero2;
	}

	//Luego comparo la tercer variable con la variable mayor, si la condicion se cumple 
	//guardo el contenido de la tercer variable en la variable mayor, sino ya quedo como mayor el valor q tenia la variable.
	if($numero3>$mayor) {
		$mayor= $numero3;
	}
	echo " El mayor de los tres numeros es : $mayor";
?>