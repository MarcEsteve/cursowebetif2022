<?php 

	$errores = '';
	$enviado = false;

	if (isset($_POST['submit'])) {
		//Recopilamos los datos que nos dan a través del formulario por el método POST, lo recibimos en la variable array asociativo $_POST
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];

		// Sanear el nombre
		if (!empty($nombre)) {
			$nombre = trim($nombre);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}
		// Sanear y validar el correo
		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}
		//Si no hay errores, el formulario queda listo para conectar y enviar a la base de datos
		if(!$errores){
			$enviado = true;
		}

	}

	require 'index.view.ejercicio5.php';

	if ($enviado == true){
		try {
			//Estableces una conexión a la Base de datos
			$conexion = new PDO('mysql:host=localhost;dbname=ejercicio5', 'root', '');
			//Revisas si se ha conectado
			echo "Todo OK conectado </br>" ;
			//Insertar datos del formulario
			$statement = $conexion->prepare('INSERT INTO datos VALUES (null, :nombre, :correo)');
			//Revisar si la sentencia SQL es correcta
			echo "OK sentencia correcta </br>";
			$statement->execute(
				array(':nombre'=> $nombre, ':correo'=> $correo)
			);
			//Revisar si se ha enviado todo OK
			echo "OK Todo enviado";

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
	
?>