<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		//Recopilamos los datos que nos dan a través del formulario por el método POST, lo recibimos en la variable array asociativo $_POST
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		// Sanear el nombre
		if (!empty($nombre)) {
			$nombre = trim($nombre);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}

		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}

		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);
		} else {
			$errores .= 'Por favor escribe el mensaje';
		}

		if(!$errores){
			$enviar_a = 'marc@bestformacio.com';
			$asunto = 'Correo enviado desde el app de formulario de PHP';
			$mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Mensaje: " . $mensaje;

			mail($enviar_a, $asunto,$mensaje_preparado);
			//Si hay un error en la conexión saldrán mensajes tipo:
			// Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\cursowebetif2022\PHP\form-db\insertar\index.php on line 44

			$enviado = 'true';
		}

	}

	require 'index.view.php';

	if ($enviado == 'true'){
		try {
			//Estableces una conexión a la Base de datos
			$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');
			//Revisas si se ha conectado
			echo "Todo OK conectado </br>" ;
			//Insertar datos del formulario
			$statement = $conexion->prepare('INSERT INTO usuarios_form VALUES (null, :nombre, :correo, :mensaje)');
			//Revisar si la sentencia SQL es correcta
			echo "OK sentencia correcta </br>";
			$statement->execute(
				array(':nombre'=> $nombre, ':correo'=> $correo, ':mensaje'=> $mensaje)
			);
			//Revisar si se ha enviado todo OK
			echo "OK Todo enviado";

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
	
?>