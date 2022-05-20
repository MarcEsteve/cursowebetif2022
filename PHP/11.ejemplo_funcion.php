<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

//echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6

function calcular_area_hex($lado,$apotema){
	$resultadoHex = ($lado*3 * $apotema);
	return $resultadoHex;
}

$area_hexagono = calcular_area_hex(5, 5);

echo 'El hexágono tiene un area de ' . $area_hexagono . ' metros cuadrados';


?>