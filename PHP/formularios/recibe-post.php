<?php

// print_r($_POST);
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $fecha = $_POST['fecha'];
// $terminos = $_POST['terminos'];

// echo 'Hola ' . $nombre . ' eres ' . $sexo . ' y has escogido la fecha: '. $fecha ;

if(!$_POST) { //Si no hay datos daria error
    header('Location:http://localhost/cursowebetif2022/PHP/formularios/ejemplo-form-index2.php'); //Carpeta y archivo para rellenar el form correcto
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$terminos = $_POST['terminos'];

echo 'Hola ' . $nombre . ' eres ' . $_POST['sexo'] . ' y has escogido la fecha: '. $fecha ;

?>