<?php
//Ejercicio 3:Mensajes de error, validar envio y sanear datos y validar también el correo
$errors = '';
$enviat = '';

if (isset($_POST['submit'])) {
	$nom = $_POST['nom'];
	$correu = $_POST['correu'];

	if (!empty($nom)) {
		$nom = trim($nom);
		$nom = htmlspecialchars($nom);
        $nom = stripslashes($nom);
	} else {
		$errors .= "Si us plau, dona'm un nom <br />";
	}

	if (!empty($correu)) {
		$correu = filter_var($correu, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correu, FILTER_VALIDATE_EMAIL)){
			$errors .= "Si us plau, dona'm un correu vàlid <br />";
		}
	} else {
		$errors .= "Si us plau, dona'm un correu <br />";
	}

	if(!$errors){
		$enviat = 'true';
	}

} 
//Ejercicio 2: requiere de vista.php
require 'vista.php';

?>