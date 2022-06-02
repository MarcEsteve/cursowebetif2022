<?php
setcookie('color', 'orange', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor red durante un mes y todo el dominio "localhost"

//setcookie('color','rojo', time(), '/');
//setcookie('color','red', time() - 60 * 60 * 24 * 365 * 53, '/');

//setcookie('color1s', 'red', time() + 1, '/'); 
//Crea cookie de pruebas durante 10 segundos

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