<?php

// if (condicion){
// 	// Instrucciones
// }

/* Operadores de comparación:
== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion
*/

/* Operadores de logicos:
&&, and - Evalua que se cumpla las dos condiciones
||, or - Evalua que se cumpla al menos una condición
xor - Evalua que se cumpla una y solo una condición
*/

$edad = 13;
?>
<?php if($edad >= 18){ ?>
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Sitio</title>
		</head>
		<body>
			<h1>Bienvenido!</h1>
		</body>
	</html>
<?php } ?>

<?php if($edad < 18){ ?>
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Sitio</title>
		</head>
		<body>
			<h1>Eres menor de edad!</h1>
			<p>No puedes visitar este sito</p>
		</body>
	</html>
<?php } ?>