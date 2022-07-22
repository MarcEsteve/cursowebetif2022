<?php

	$id = $_GET['id'];
	//Si queremos añadir más ids ***
	//$id2 = $_GET['id2'];

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
		$resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id ");
		//***Añadir a la consulta: " OR id = $id2"

		foreach($resultados as $fila){
			echo $fila['id'] . ' - ' . $fila['nombre'] . "<br />";
		}

	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}

?>