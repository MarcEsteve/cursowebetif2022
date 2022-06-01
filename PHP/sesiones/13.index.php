<?php
// echo 'Primero $_SESSION vale= ';
// print_r($_SESSION);
session_start();
// // session_destroy();
// echo '<br>Con la sesión iniciada $_SESSION vale= ';
// print_r($_SESSION);
$_SESSION['nombre'] = 'Marc';
// echo '<br>Con valores a $_SESSION vale= ';
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones 1</title>
</head>
<body>
	<h1>Página de Inicio INDEX.PHP</h1>
	<p>Has cargado una nueva sesión y le has dado valor a nombre = Marc</p>
	<a href="pagina2.php">Ir a la página 2</a>
	<a href="cerrar.php">Ir a cerrar sesión</a>
</body>
</html>