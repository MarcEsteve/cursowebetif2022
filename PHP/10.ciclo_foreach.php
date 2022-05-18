<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
); //$meses[3] => Abril INDEXADO
//Añadir 13ª posición 
$meses[12] = "Mesinventado"; 
$marc = array('telefono' => 123456789, 'edad' => 36, 'ciudad' => 'Torrelles'); //$marc['edad'] => 36 ASOCIATIVO
$marc['transporte']='helicoptero';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array y array asociativo</title>
</head>
<body>
	<h1>Recorrer array[,] y array asociativo (clave => valor)</h1>
	<ol>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }

			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			foreach($marc as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ol>
</body>
</html>