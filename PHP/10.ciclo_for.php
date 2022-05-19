<?php

//$i = $i + 5 === $i += 5
//for (inicialización ; condición ; incremento/decremento) { //Acciones }
// for($i = 0 ; $i <= 100 ;  $i += 5){
// 	echo $i . "<br />";
// }

//Ejercicio: quiero obtener la table de multiplicar del 5, que vaya del 5x0=0 hasta el 5x10=50
// for($i = 0 ; $i <= 10 ; $i++ ){
// 	//5x0=0;
// 	echo "5x" . $i . "=" . 5*$i . "<br>" ;
// }
//Ejercicio muestra del 1 al 13 separados por comas y no se muestre la última coma
//1,2,3,4, ... ,13
// for ($i=1; $i < 14; $i++) { 
// 	// echo $i . ", ";
// 	if ($i==13) {
// 		echo $i;
// 	} else {
// 		echo $i . ", ";
// 	}	
// }
for ($i=1; $i <= 13 ; $i++) { 
	echo $i . ", ";
}
// echo $i;

?>