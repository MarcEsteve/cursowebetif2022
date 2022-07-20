<?php
// Realizamos una conexion a la base de datos.
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

// Nos retorna un codigo de error o si todo esta bien regresa 0.
// echo $conexion->connect_errno;

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// $id = isset($_GET['id']) ? $_GET['id'] : 1;
	// $sql = "SELECT * FROM usuarios WHERE ID = $id";
	$sql = "SELECT * FROM usuarios";
	$resultado = $conexion->query($sql);
	
	if($resultado->num_rows){
		// echo '<pre>';
		// var_dump($resultado->fetch_assoc());
		// echo $resultado->fetch_assoc()['nombre'];
		// echo '</pre>';

		while($fila = $resultado->fetch_assoc()){
			echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
		}

	} else {
		echo 'No hay datos';
	}
}