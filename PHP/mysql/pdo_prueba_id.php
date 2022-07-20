<?php

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
	

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id= :id');
	$statement->execute(
		array(':id'=> 5)
	);

	$resultados = $statement->fetch();
	print_r($resultados);

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>