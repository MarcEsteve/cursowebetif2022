<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<!-- <li><?php echo $meses[0]; ?></li> -->
		<!-- Podriamos colocarlos de uno en uno con un listado -->
		<?php 
		# Mediante el ciclo foreach podemos recorrer un array y ejecutar determinadas instrucciones por cada elemento del array.
		# Esta es la forma mas facil de recorrer arrays en PHP.
		foreach($meses as $mes){
			echo '<li>' . $mes . '</li>'; // echo $meses[0]; solo repetiria el primero
		}
		?>
	</ul>
</body>
</html>