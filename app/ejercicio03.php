<?php
	
	$mes=rand(1,12);                                         //Defino una variable para que metire un mes entre 1 y 12
	echo "Mes elegido : " . $mes . "<br>";                   //Lo muestro para que se vea el mes en pantalla

	switch($mes) {
		case 12: 
			echo "Termina la Primavera y empieza el " ;
		case 1: 
		case 2: 
			echo "Verano...";
			break;
		case 3: 
			echo "Termina el Verano y empieza el " ;
		case 4: 
		case 5: 
			echo "Otoño..";
			break;
		case 6: 
			echo "Termina el Otoño y empieza el " ;		
		case 7: 
		case 8: 
			echo "Invierno...";
            break;
		case 9: 
			echo "Termina el Invierno y empieza la " ;		
		case 10: 
		case 11: 
			echo "Primavera...";
			break;
	}
				
?>