<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<p>Selecciona el registro a eliminar</p>
			<select name="id" id="id" class="form-control">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<input type="submit" name="submit" class="btn btn-primary" value="Eliminar registro">
		</form>
	</div>
</body>
</html>