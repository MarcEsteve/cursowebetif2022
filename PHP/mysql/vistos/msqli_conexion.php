<?php

$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// Codigo 
	echo "Conexión sin errores a HEIDISQL_CURSO";
}