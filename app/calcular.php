<?php
	function retornarSiEsCero($numeroIngresado){
		if ($numeroIngresado==0){
			$retorno=True;
		} else {
			$retorno=False;
		}
		return $retorno; // si es cero retorna true sino es false	
	}
	function sumar($numero1, $numero2){ //puede sumar siempre
		return $numero1+$numero2;
	}
	function dividir($numero1, $numero2){
		if (retornarSiEsCero($numero2)==True) {
			$resultado ="NO SE PUEDE DIVIDIR !!!";
		} else {
			$resultado = $numero1/$numero2;
		}
		return $resultado; //sino puede dividir retorna infinito
	}
	function mostrarResultado($resultadoParametro){
		return $resultadoParametro;
	}

	function calcular($numero1,$operador,$numero2){
		switch ($operador) {
			case '+':
				echo "El resultado de la suma es: " . mostrarResultado(sumar($numero1, $numero2));
				break;
			case '/':
				echo "El resultado de la Divicion es: " . mostrarResultado(dividir($numero1, $numero2));
				break;
			
			default:
				echo "Operacion no valida....";
				break;
		}
	}


	echo "CALCULADORA <br><br>";

    // Ejemplo 1 de suma
	$a=2;
	$b=2;
	$op='+';
	echo "El valor ingresador en la variable A-> $a <br>";
	echo "El valor ingresador en la variable B-> $b <br>";
	echo "que operacion quiere hacer  $op <br>";	
	calcular($a,$op,$b);

	// Ejemplo 2 de Dividir
	echo "<br><br>";
	$a=2;
	$b=2;
	$op='/';
	echo "El valor ingresador en la variable A-> $a <br>";
	echo "El valor ingresador en la variable B-> $b <br>";
	echo "que operacion quiere hacer  $op <br>";	
	calcular($a,$op,$b);

	// Ejemplo 3 de Dividir
	echo "<br><br>";
	$a=2;
	$b=0;
	$op='/';
	echo "El valor ingresador en la variable A-> $a <br>";
	echo "El valor ingresador en la variable B-> $b <br>";
	echo "que operacion quiere hacer  $op <br>";	
	calcular($a,$op,$b);

?>