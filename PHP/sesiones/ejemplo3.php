<?php

session_start();

echo 'Bienvenido a la página de ejemplo #3 sin ningún enlace<br />';

$color=$_SESSION['color'];
$animal=$_SESSION['animal'];
$instante=date('H:i:s d m Y', $_SESSION['instante']);

echo "Hoy es: " . $instante . "- El color es: " . $color . " y el animal es: " . $animal;


?>