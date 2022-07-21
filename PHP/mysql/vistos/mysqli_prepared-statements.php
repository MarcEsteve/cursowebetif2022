<?php
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("INSERT INTO usuarios(id, nombre) VALUES(?, ?)");
	
	// Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double
	$statement->bind_param('ss', $id, $nombre);
	$id = NULL;

	// Comprobamos que hayamos pasado un nombre por URL
	if(isset($_GET['nombre']) ){
		$nombre = $_GET['nombre'];
	}

	// Ejecutamos la sentencia.
	$statement->execute();
	// echo 'Filas añadidas:' . $conexion->affected_rows;

	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	} else {
		echo 'No se agrego nada';
	}
}