<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, "Alex")');
	$statement->execute();


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>