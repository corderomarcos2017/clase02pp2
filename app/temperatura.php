<?php
	function cf($parametro) { //Convierte de celsius a farenheit
		return (1.8) * $parametro + 32 ;
	}
	function fc($parametro) { //Convierte de farenheit a celsius
		return ($parametro - 32) / 1.8 ;
	}
	function nombreCompleto($tipo){ //Devuelve el nombre completo de celsius o farenheit
		switch($tipo){
			case "f": 
			case "F": 
				$retorno = "Farenheit";
				break;
			case "c": 
			case "C": 
				$retorno = "Celsius";
				break;
			default:
				$retorno = "TIPO NO VALIDO";
				break;
		}
		return $retorno;
	}
	function transformar($temperatura, $tranformar){ 
		switch ($tranformar) {
			case "f": // convertir a farenheit
			case "F": // convertir a farenheit
				$retorno = cf($temperatura);
				break;
			case "c": // convertir celsius
			case "C": // convertir celsius
				$retorno = fc($temperatura);
				break;
			default:
				$retorno = "NO VALIDA";
				break;
		}
		mostrarTemperatur($retorno, nombreCompleto($tranformar));
	}
	function mostrarTemperatur($valor, $tipoConversion) {
		if($valor=="NO VALIDA"){
			echo "Error, operacion no valida!!! Solo puede utilizar f-farenheit o c-celsius...";
		} else {
			//echo "<h2> Resultados </h2>";
			echo "El resultado de la tranformacion es : $valor $tipoConversion";
			//echo "<h4> Mi Empresa </h4>";
		}
	}

	echo "<h1>CONVERSION DE TEMPERATURA</h1><br><br>";
	$temp=10;
	$conversion="f";
	echo "<h2>Ejemplo 1 </h2>";
	echo "La temperatura ingresada es : " . $temp . "<br>";
	echo "¿a que lo quiere transformar ? (f - farenheit /c - celsius) : ". $conversion . "<br>";
	transformar($temp, $conversion);


	$temp=50;
	$conversion="c";
	echo "<h2>Ejemplo 2 </h2>";
	echo "La temperatura ingresada es : " . $temp . "<br>";
	echo "¿a que lo quiere transformar ? (f - farenheit /c - celsius) : ". $conversion . "<br>";
	transformar($temp, $conversion);

	$temp=50;
	$conversion="lalala";
	echo "<h2>Ejemplo 3 </h2>";
	echo "La temperatura ingresada es : " . $temp . "<br>";
	echo "¿a que lo quiere transformar ? (f - farenheit /c - celsius) : ". $conversion . "<br>";
	transformar($temp, $conversion);

?>