<?php 

$edad = 18;

//Función isset() revisa si una variable tiene valor
//Operador ternario o atajo IF (condición) ? (para true este valor) : (para false este valor)
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
// $edad = false ? 3 : 5; // Daría $edad asignamos 5
// $edad = true ? 3 : 5; // Daría $edad asignamos 3

// if (isset($edad)) {
// 	$edad = $edad;
// } else {
// 	$edad = 'El usuario no establecio su edad';
// }

echo 'Edad: ' . $edad;

?>