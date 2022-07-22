<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_mysqli', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM ejerciciocreate');
	$statement->execute();

	$resultados = $statement->fetchAll();
	foreach ($resultados as $usuario) {
		echo $usuario['ID'] . " - " .  $usuario['nombre'] . " - ".  $usuario['edad'].'<br>';
	}

}catch(PDOException $excepciones){
	echo "Error: " . $excepciones->getMessage();
}

?>