<?php

// print_r($_GET);


#Muestra en pantalla lo que hemos rellenado del formulario se puede editar y modificar el array del get
//Incluso inyectar código: <h1>Hola</h1> o <script>alert('Hola')</script>

if(!$_GET) {
    header('Location: http://localhost/cursoweb/formularios/ejemplo-form-index.php'); //Carpeta y archivo para rellenar el form correcto
}
if ($_GET['nombre']) { //VALIDACIÓN NOMBRE
    $nombre = $_GET['nombre'];
}
else {
    echo 'El usuario no ha escrito su nombre';
}
if ($_GET['sexo']) { //VALIDACIÓN SEXO
    $sexo = $_GET['sexo'];
}
else {
    echo 'El usuario no ha escrito su sexo';
}
if ($_GET['fecha']) { //VALIDACIÓN FECHA
    $fecha = $_GET['fecha'];
}
else {
    echo 'El usuario no ha escrito su fecha';
}
if ($_GET['terminos']) { //VALIDACIÓN TERMINOS
    $terminos = $_GET['terminos'];
}
else {
    echo 'El usuario no ha aceptado terminos';
}
// $nombre = $_GET['nombre'];
// $sexo = $_GET['sexo'];
// $fecha = $_GET['fecha'];
// $terminos = $_GET['terminos'];

echo 'Hola ' . $nombre . ' eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

?>