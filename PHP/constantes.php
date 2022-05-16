<?php 
/*------------CONSTANTES------------------------------
En las variables si podemos cambiar el valor que se le asigno. Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor */
define('NOMBRE', 'Marc');
// define('NOMBRE', 'Esteve');
define('PI', 3.14); // ,true) como tercer parametro no funciona en la version PHP8
// La constante PI es un tipo de valor "Double"
echo NOMBRE . '<br>'; //Mostrar
// echo Pi;
echo PI . '<br>';
// echo pi;
const CONSTANTE = 'Hola Mundo';
// Definimos constantes con la palabra clave "const"
echo CONSTANTE . '<br>';

/*------------VARIABLES------------------------------
En las variables si podemos cambiar el valor que se le asigno.*/
$nombre = "Marc";
echo $nombre; // Mostraria Marc en pantalla
echo '<br>';
$nombre = "Esteve";
echo $nombre; // Mostraria Esteve en pantalla

?>