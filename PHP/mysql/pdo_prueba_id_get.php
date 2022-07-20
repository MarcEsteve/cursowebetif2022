<?php 

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
	$statement->execute(
		array(':id'=> $id)
	);

	$resultados = $statement->fetch();
	echo "<pre>";
	print_r($resultados);
	echo "</pre>";

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>