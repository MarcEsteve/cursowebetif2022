<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo count($meses);//función que cuenta valores de array
// echo "<br>";
//echo $meses[11];// La forma de mostrar el valor si se cual busco
echo "<br>";
$ultimo_mes = count($meses) - 1;  //guardas el último valor, en este caso el número entero 11
echo $meses[$ultimo_mes]; //muestras la última posición del array
echo "<br>";

#Recordatorio de funciones
echo implode(" ",$meses);
echo "<br>";
echo gettype($meses);
echo "<br>";
var_dump($meses);

?>