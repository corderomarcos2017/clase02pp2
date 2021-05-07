<?php
    $suma = 0; 
    $numero=28;
    echo "El número ingresado es $numero <br>";
    for ($i = 1; $i < $numero; $i++) {              // la variable $i son los divisores. Se divide desde 1 
    	                                            // hasta $numero-1                            
        if ($numero % $i == 0) {
            $suma += $i;                            // si es divisor se $suma, lo voy acumulando
        }
    }

    if ($suma == $numero) {                         // si el numero es igual a la suma de sus divisores es
        echo "Perfecto" ;                           // perfecto                
    } else {
        echo "No es perfecto";
    }
?>