<?php 

$mes = 'Agosto';
$verdadero = true;
$saludo ="";
$dia = "Sábado";

// if ($verdadero) {
// 	echo "Verdadero";
// } else {
// 	echo "Falso";
// }

if (($mes == 'Diciembre') && ($verdadero == true)) {
	$saludo = "Feliz Navidad";
	//Asignas a la variable $saludo un texto diferente para cada caso de los condiciones
} else if($mes == 'Enero'){
	$saludo = "Feliz Año Nuevo";
} else if ($mes == 'Julio'){
	$saludo = "Feliz Julio";
} else if ($mes == 'Junio'){
	$saludo = "Bona revetlla";
} else if ($mes == 'Agosto'){
	$saludo = "Buenas vacaciones";
} else {
	$saludo = "El mes no tiene celebracion";
}
echo $saludo;

//Ejemplo entre semana
// if ($dia=="Sábado") {
// 	echo "Buen fin de semana, que es sábado";
// } else if ($dia=="Domingo"){
// 	echo "Buen fin de semana, que es domingo";
// } else {
// 	echo "Estas entre semana";
// }

 ?>