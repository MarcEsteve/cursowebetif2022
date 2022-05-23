<?php 
	echo "Soy un echo";
	die(); //Deja de ejecutar el resto del código
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Función die()</title>
</head>
<body>
	<h1>Hola Mundo</h1>
	 <!-- <?php //die(); ?> Las siguientes declaraciones no se estan ejecutando -->
	 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus perferendis vel quaerat ut nostrum nemo eius unde, minus esse aspernatur in voluptates minima libero suscipit necessitatibus saepe similique numquam optio!</p>
	 <?php die(); ?>
	 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus perferendis vel quaerat ut nostrum nemo eius unde, minus esse aspernatur in voluptates minima libero suscipit necessitatibus saepe similique numquam optio!</p>
	 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus perferendis vel quaerat ut nostrum nemo eius unde, minus esse aspernatur in voluptates minima libero suscipit necessitatibus saepe similique numquam optio!</p>
</body>
</html>