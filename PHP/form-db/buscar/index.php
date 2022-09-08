<?php 

	$errores = '';
	$enviado = false;

	//Si hemos hecho clic sobre el botón de BUSCAR:
	if (isset($_POST['submit'])) {
		//Guardaremos el valor asignado por el usuario de la id en la variable $id
		$id = $_POST['id'];
		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id';
		}
		//Si han dado una id, cambiamos el $enviado a true, es decir, se enviará el formulario 
		if(!$errores){
			$enviado = true;
		}
	}

	require 'index.view.php';

	//A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
	if ($enviado){
		try {
			//Conectamos con la API PDO a las BBDD
			$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');

			//Buscar datos del formulario "READ" SQL
			$statement = $conexion->prepare('SELECT * FROM usuarios_form WHERE id = :id');
			$statement->execute(
				array(':id'=> $id)
			);
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultados = $statement->fetch();
			
			//Como mostramos los datos
			if($resultados){
				echo "<p style='text-align:center'> El registro es:</br> ";
				echo "ID:" . $resultados['id'] . ' - ' . $resultados['nombre']. ' - ' . $resultados['correo']. ' - ' . $resultados['mensaje'] ;
				echo "</p>";

			} 
			//Si no hay datos en el registro
			else {
				echo "<p style='text-align:center'>No hay ese registro</p>";
			}	

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
	
?>