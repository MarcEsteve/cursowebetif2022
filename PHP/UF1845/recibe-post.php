<?php

// print_r($_POST);
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$terminos = $_POST['terminos'];

echo 'Hola ' . $nombre . 'eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

// if(!$_POST) {
//     header('Location: http://localhost/curso-web/formulario') //Carpeta y archivo para rellenar el form correcto
// }

// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $fecha = $_POST['fecha'];
// $terminos = $_POST['terminos'];

// echo 'Hola ' . $nombre . 'eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

?>