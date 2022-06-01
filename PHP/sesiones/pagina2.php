<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones 2</title>
</head>
<body>
	<h1>PÁGINA2.PHP</h1>
</body>
</html>
<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h2>Hola $nombre</h2> <p>Sesión iniciada correctamente</p><br>";
	echo '<a href="cerrar.php">Cerrar sesión</a>';
} else {
	echo 'No has iniciado sesión<br>';
	echo '<a href="13.index.php">Iniciar otra sesión</a>';
}

?>