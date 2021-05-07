<?php
	$num=rand(2,100);	
	if($num>0){
		echo "El numero ingresado es : $num ";
		$todos=$num -1 ;
		while ($todos>1) {
			if($num%$todos!=0) 
			{ 
				$primo="s";
			} else {
				$primo="n" ;
				break;
			}
			$todos--;
		}
		if($primo == "s" ) {
			echo "es PRIMO ...";
		} else {
			echo "NO ES PRIMO ...";			
		}
	}
	
?>