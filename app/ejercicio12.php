<?php

//Creado por Cordero Marcos

echo "CENTRO NUMERICO - Ejercicio 12 <br><br>";

$fin=1;
$cuatro=1;
while ($cuatro<=4) {
	
	for($recorrer=1;$recorrer<=$fin;$recorrer++){                   //Recorro todas los numeros desde el 1 hasta lo que diga $fin
		
		$suma1=0;                                                   //Acumula el 1er grupo de numeros
		$suma2=0;                                                   //Acumula el 2do grupo de numeros

		for($grupo1=1;$grupo1<=$recorrer;$grupo1++) {               //Recorro ascendentemente todos los numeros hasta lo que diga 
			                                                        //$recorrer
			$suma1+=$grupo1;                                        //Acumulo en $suma1 el valor de la variable $grupo1 
		}

		for($grupo2=$fin;$grupo2>=$recorrer+2;$grupo2--) {          //Recorro descendentemente todos los numeros desde el $fin  
			                                                        //hasta lo que diga recorrer
			$suma2+=$grupo2;                                        //Acumulo en $suma2 el valor de la variable $grupo2
		}

		if($suma1==$suma2) {                                        //Si el contenido de $suma1 y $suma2 es igual, el centro 
			echo "El centro numerico entre 1 y $fin ";              //numerico
			echo "es: " . ($recorrer+1). "<br>";
			$medio = 1;
			break;                                                  //Rompo el ciclo de $recorrer para no seguir avanzando
		} else {
			if($suma1>$suma2 || $recorrer==$fin-1 || $fin==1) {     //Sino pregunto si existe alguna de estas posibilidades  
				$medio=0;
				break;                                              //Rompo el ciclo de $recorrer para no seguir avanzando.
			}
		}
	}
	
	if($medio==1) {
		$cuatro++;
	}

	$fin++;

}
	
?>