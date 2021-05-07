<?php
function siElNroEsPrimo($valor) {
	for($numeroAnterior=2;$numeroAnterior<$valor;$numeroAnterior++)
	{
		if($valor%$numeroAnterior==0)
		{
			break;
		}
	}
	if($numeroAnterior<$valor)
	{
		$retorno="Falso";
	}else
	{
		$retorno="Verdadero";
	}
	return $retorno;
}


$num=rand(1,100);

echo "El numero ingresado $num es primo ? " . siElNroEsPrimo($num);




?>