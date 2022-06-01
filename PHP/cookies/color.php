<?php
setcookie('color', 'red', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor red
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color red</title>
</head>
<body>
    <h1>Creación cookie color</h1>
    <p>Cookie de nombre 'color' y valor 'red'</p>
	<a href="texto.php">texto.php</a>
</body>
</html>