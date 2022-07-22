<?php

	try {
		//Conexión a la base de datos
		$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

		//Prepared Statements "Consulta preparada"
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id= :id');
		$statement->execute(
			array(':id'=> 5)
		);
		//Resultado de la consulta
		$resultados = $statement->fetch();
		print_r($resultados);

	} catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}

?>