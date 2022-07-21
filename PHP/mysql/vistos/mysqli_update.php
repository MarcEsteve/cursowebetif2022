<?php
	// El nombre de la variable es indiferente 
	// Podria ser $conexion, $connection, $conectabasedatos y realiza la CONEXIÓN con la base de datos.
	$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');
	//Si hay errores en la conexión realiza un die() y finaliza el programa
	if ($conexion->connect_errno){
		die('Lo siento hubo un problema con el servidor');
	} else {
		// El nombre de la variable es indiferente 
		// Podria ser $sql, $statement, $instruccion, $actualizacionsql que GUARDA la consulta SQL
		$statement = $conexion->prepare("UPDATE `ejerciciocreate` SET `nombre` = 'Marcos', `edad` = '38' WHERE `ejerciciocreate`.`ID` = 1");

		// Ejecutamos la sentencia.
		$statement->execute();
		echo "Se ha actualizado correctamente la base de datos";
	}
?>