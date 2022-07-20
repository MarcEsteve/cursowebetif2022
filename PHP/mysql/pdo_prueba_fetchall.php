<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios');
	$statement->execute();

	$resultados = $statement->fetchAll();
	foreach ($resultados as $usuario) {
		echo $usuario['nombre'].'<br>';
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>