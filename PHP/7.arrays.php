<?php 

# Los arrays son como variables que nos permiten guardar multiples valores.

# Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro array llamado semana.
echo $semana[0] . '<br />'; //Lunes
echo $semana[1] . '<br />'; //Martes    
echo $semana[2] . '<br />'; //Miércoles
echo $semana[3] . '<br />'; //Jueves
echo $semana[4] . '<br />'; //Viernes
echo $semana[5] . '<br />'; //Sábado
echo $semana[6] . '<br />'; //Domingo
echo '<hr>';
echo implode('<br>', $semana); // string $glue ', '
echo '<hr>';
echo '<h2>Ejemplos campus</h2>';
$cars = array("Volvo","BMW","Toyota");
$coches = [1,2,3];
var_dump($cars);
echo "<br>";
var_dump($coches);
$cars[7] = "Opel";
echo "<br>";
var_dump($cars);
echo "<br>";
echo $cars[3]; //Nos devuelve un warning porque no esta asignado ningún valor en el índece 3, posición cuarta
echo $cars[7]; // Muestra: Opel
echo "<br>";
$cars[3]='Eva'; // Muestra: Eva
echo $cars[3]; 
echo "<br>";
$variable[27]=123;
var_dump($variable); //array(1) { [27]=> int(123) } array(2) { ["modelo"]=> string(5) "Astra" [1]=> string(1) "d" }

//Variables array matriz ASOCIATIVA
$coche = array(
    "modelo" => "Astra",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($coche); 
// Sintaxis corta  
$array = [
    "clave" => "valor1",
    "clave2" => "valor2",
];
echo "<br>";
var_dump($array); //array(2) { ["clave"]=> string(6) "valor1" ["clave2"]=> string(6) "valor2" }
echo "<br>";
echo $coche[1];//El valor es d
echo "<br>";
echo $coche["1"];//El valor es d
echo "<br>";
echo $coche["modelo"];//Warning pero da el valor "Astra"
?>