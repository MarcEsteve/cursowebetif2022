<?php 

echo "Empieza el código de la prueba'. Lorem ipsum dolor sit amet consectetur adipisicing elit.";

//include 'prueba-vista.php'; 
//Warning, cuando el archivo "incluido" no es importante
require 'prueba-vista.php'; 
//Fatal error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse

echo "111111Sigue el código. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus est natus eum ut magni harum vitae sunt at quisquam officia voluptate nesciunt tenetur, praesentium facilis asperiores illo dignissimos neque! Magnam.";

require 'prueba-vista.php';
//Equivalente a copiar y pegar todo el código del documento preuba-vista.php: 
// <!DOCTYPE html>
// <html>
// <body>
// 	<h1>Esto es un titular del vista.php</h1>
//     <p>Esto es un parrafo del vista</p>
// </body>
// </html>

echo "222222Sigue el código. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus est natus eum ut magni harum vitae sunt at quisquam officia voluptate nesciunt tenetur, praesentium facilis asperiores illo dignissimos neque! Magnam.";

/*
include y require hacen lo mismo, pero con include el resto de la página se ejecuta, con require es obligatorio que se realice bien para que el resto del código de la página se ejecute
*/
?>