<?php
	$variable=rand(-100,100);	
	echo "El numero ingresado es: $variable <br>";
	if ($variable < 0) {
		echo "NO SE PUEDE MOSTRAR.... <br>";

	}
	else
	{
		for($final=$variable;$final>=0;$final--) {
			echo " <br> $final ";
		}
	}

?>