<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Agosto';
$saludo;

switch($mes){
	case 'Diciembre':
		$saludo = "Feliz Navidad!";
	break;

	case 'Enero':
		$saludo = "Feliz Año Nuevo";
	break;

	case 'Junio':
		$saludo = "Bona revetlla";
	break;

	case 'Agosto':
		$saludo = "Buenas vacaciones";
	break;

	default:
		$saludo = "En este mes no se celebra nada";
	break;
}

echo $saludo;

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>