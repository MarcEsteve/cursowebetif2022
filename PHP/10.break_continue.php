<?php 

$paises = array(
	'Mexico', 'Japón', 'China', 'EEUU', 
	'Argentina', 'Marruecos', 'Tailandia'
);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach break-continue</title>
</head>
<body>
	<h1>Paises</h1>
	<?php 
		#Solo muestra China
        // foreach($paises as $pais){
		// 	if ($pais == 'China') {
		// 		echo $pais . '<br />'; 
		//  	}
        // }
		//Muestra 6 veces China, CUIDADO con asignación = y no compración ==
		// foreach($paises as $pais){
		// 	if ($pais = 'China') {
		// 		echo $pais . '<br />'; 
		//  	}
        // }

		#CONTINUE: Muestra todos menos China, salta el valor porque salta al siguiente FOREACH
		// foreach($paises as $pais){
		// 	if ($pais == 'China') {
        //     	continue;
        //     }
		// 	echo $pais . '<br />';
        // }

		#USO DEL BREAK, truncar el array
		// foreach($paises as $pais){
			
		// 	if ($pais == 'China') {
		// 		break;
		// 	}
		// 	echo $pais . '<br />';
			
		// }
	?>
</body>
</html>