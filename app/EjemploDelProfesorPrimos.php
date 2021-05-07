<?php
$num=100;	

for($todos=0;$todos<=$num;$todos++){
	$numeroIngresado=$todos;

	for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
	{
		if($numeroIngresado%$numeroAnterior==0)
		{
			break;
			//echo "<br> nro: $numeroAnterior";
			//si entra aca no es primo
		}
	}

	if($numeroAnterior<$numeroIngresado )
	{
		echo "$numeroIngresado  no es primo";
	}else
	{
		echo "$numeroIngresado  ES primo";
	}
	echo "<br>";

}




?>