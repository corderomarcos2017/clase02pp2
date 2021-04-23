<?php
	$op=rand(1,3);
	echo "Menu de opciones <br><br>";

	echo "1 - Bariloche <br>";
	echo "2 - Ushuaia <br>";
	echo "3 - Cataratas <br>";

	echo "Su opcion elegida es: $op";


	switch ($op) {
		case 1:
		case 2:
			echo "<br> Hace frio ... ";
			break;
		case 3:
			echo "<br> Hace calor ... ";
			break;
	}
?>