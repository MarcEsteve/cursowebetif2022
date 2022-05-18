<?php 
$hora = 21;
$respuesta="";

if(($hora >= 15) and ($hora <= 20)){
    $respuesta = "Estamos en CURSOWEBETIF tardes";
} else if (($hora >= 9) and ($hora <= 14)) {
	$respuesta = "Estamos en FULLSTACK mañanas";
} else {
	$respuesta = "No estoy en clase";
}
echo $respuesta;
 ?>