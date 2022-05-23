<?php 
$numero =10;
function suma($numero, $numero2){
	return $numero + $numero2;
}

//include '11.include-require-vista.php'; //Warning, cuando el archivo "incluido" no es importante
require '11.include-require-vista.php'; //Fatal error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse
// include_once 'vista.php' //Solo una vez
//require_once '11.include-require-vista.php'; //Solo una vez
echo "Sigue el código. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus est natus eum ut magni harum vitae sunt at quisquam officia voluptate nesciunt tenetur, praesentium facilis asperiores illo dignissimos neque! Magnam.";
$numero =20;
require '11.include-require-vista.php';
//Equivalente a copiar y pegar todo el código del documento
// <!DOCTYPE html>
// <html lang="es">
// <head>
// 	<meta charset="UTF-8">
// 	<title>Vista</title>
// </head>
// <body>
// <h1>El resultado es:<?php echo suma($numero,30);? >
//</h1>
// </body>
// </html> -->

/*
include y require hacen lo mismo, 
pero con include el resto de la página se ejecuta, 
con require es obligatorio que se realice bien para que el resto del código de la página se ejecute
*/
?>