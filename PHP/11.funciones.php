<?php 

/* FUNCIONES INTEGRADAS
count();
sort();
rsort();
var_dump();
print_r();

+ de 1000 funciones
https://www.w3schools.com/php/php_ref_overview.asp
*/

// FUNCIONES DEFINIDAS POR EL USUARIO
#Con un solo parámetro

function saludo($nombre){
	return 'Saludo, ' . $nombre;
}

echo saludo('Angel') . '<br />';
echo saludo('Fernando') . '<br />';
echo saludo('Rafael') . '<br />';
echo saludo('Manuel') . '<br />';

#Con dos parámetros

// function sumar($numero1, $numero2){
// 	$resultado = $numero1 + $numero2;
// 	return $resultado;
// }

// $resultado = sumar(10, 15);

?>