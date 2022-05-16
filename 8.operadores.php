<?php 

/* Operadores Aritméticos:
+	Suma
-	Resta
*	Multiplicación
/	División
%	Resto
**	Exponente 10^6
-- */
// $numero1 = 10;
// $numero2 = 6;
// $resultado = $numero1 ** $numero2;
// echo gettype($resultado);
// echo $resultado;

/* Operadores de Asignación:
=
+=
-=
*=
/=
-- */
$numero = 10;
// $numeros = 13;
$numero5 = 5;
// $numero = $numero + $numero5;
$numero += $numero5;
// $numeros += $numero5; //$numeros = $numeros + $numero5;
//echo $numero .'<br>'; //15
// $numero = $numero + 7;
$numero += 7;
//echo $numero .'<br>'; //22
// $numero = $numero * 3;
$numero *= 3;
//echo $numero .'<br>'; //66
// $numero = $numero % 3;
$numero %= 3;
//echo $numero .'<br>'; //0
$numero=10;
// $numero = $numero ** 3; Exponente 10*10*10
$numero **= 3;
//echo $numero; //1000

/* Operadores de Comparación:
==
===
!=, <>
!==
>
<
>=
<=
<=> -1 0 1
-- */
$stringNumero = '10'; // String
$numero = 10; //Integer
$numSpaceship = 13;
$variable = 'true';
//echo $stringNumero == $numero; //1 True
//echo $stringNumero === $numero; // vacio False
//echo $numero < $numSpaceship; //1 True 
//echo $numero >= $stringNumero; //1 True 
//echo $numero<=>$numSpaceship; 
//< -1 

//echo 'Igual valor?: '.   ($stringNumero==$numero) . '<br>'; //true
//echo 'Idénticos?: ' .  ($stringNumero===$numero); //false

// if ($stringNumero===$numero) {
// 	echo 'Idénticos valor y tipo de $stringNumero y  $numero';
// }
// else{
//     echo 'stringNumero y numero no son idénticos';
// }

/* Operadores de Incremento / Decremento:
++$x
$x++
--$x
$x--
-- */

$numero = 10;
//echo $numero .  '<br>'; //10
//$numero = $numero + 1;
//$numero += 1;
// echo 'Valor del $numero++= ' . $numero++ . '<br>';
// echo $numero . '<br>';
// echo 'Valor del ++$numero= ' . ++$numero . '<br>';
// echo 'Valor final de $numero= ' . $numero;
# La diferencia es lo que muestra y lo que GUARDA de VALOR
// echo $numero--;
// echo "<br />";
// echo $numero;
// echo --$numero;
// echo "<br />";
// echo $numero;


/* Operadores de Strings - Cadenas de texto:
.
.=
-- */
$texto = 'Cadena de Texto';
$texto2 = ' Una segunda Cadena de Texto';
//echo $texto . $texto2 . "<br>";
$texto .= $texto2;
// echo $texto;
// echo $texto2;

// EJEMPLO NOMBRES APELLIDOS
$nombre = 'Marc';
$apellidos = 'Esteve Garcia';
//$nombreCompleto = $nombre . " " . $apellidos;
$nombre .= " " . $apellidos;
//echo $nombreCompleto . "<br>";


/* Operadores Lógicos:
and, &&
or, ||
xor
!
-- */
$numero = 21;

// if ($numero >= 10 or $numero > 20 and $numero > 1) {
// 	echo "Se cumple toda la condición";
// }
// else{
//     echo "No se cumple la condición";
// }

$bool= false;
// if (!$bool) { //NOT FALSE = TRUE
// 	echo '!$bool se cumple1' . $bool;
// }
// else{
//     echo '!$bool no se cumple2';
// }

$array1=['a' =>'Hola', 'b'=> 'Hello'];
$array2=['c' =>'Adiós', 'd' =>'Adeu'];

#NUEVA FUNCIÓN PRINT_R() muestra en pantalla la suma y en este caso, la suma es una fusión de las claves y valores de ambas matrices
$fusionArrays=$array1 + $array2;
// print_r($fusionArrays); 
// echo '<br>';
// var_dump($fusionArrays);
//  echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");
//print_r($x + $y); 

$x=array( "a" => "10", "b" => "green");  
$y=array("b" => "green","a" => "10" );  
//var_dump($x == $y); //BOOL(TRUE)
//var_dump($x === $y); //BOOL(FALSE)

#NUEVA FUNCIÓN EMPTY() vacia la variable?
// Si la "variable $user" esta vacia empty($user) = TRUE, asignamos a la variable $status = "anonymous"
// echo $status = (empty($user)) ? "anónimo" : "sesión iniciada";
// echo "<br>";

// $user = "John Doe";
// $user=NULL;
// if empty($user) = FALSE, set $status = "logged in"
//OPERADOR TERNARIO
//echo $status = (empty($user)) ? "anónimo" : 'sesión iniciada y $user no esta vacia y es igual a '. $user;

//OPERADOR FUSIÓN NULA
// variable $color es "rojo" if $color does not exist or is null
// $color="blue";
//echo $color = $color ?? "rojo";

?>