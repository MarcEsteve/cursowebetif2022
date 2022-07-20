<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Marcos', `edad` = '38' WHERE `usuarios`.`ID` = 1");

	// Ejecutamos la sentencia.
	$statement->execute();
}