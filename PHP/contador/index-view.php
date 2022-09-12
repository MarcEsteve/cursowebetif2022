<?php
        if(isset($_POST['button1'])) {
            $archivo = 'contador.txt';
            file_put_contents($archivo, 1);
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo contar_usuarios(false) ?></p>
		<p class="texto">Visitas</p>
        <form method="post">
            <input type="submit" name="button1"
                value="Reiniciar"/>
        </form>
	</div>
    
</body>
</html>