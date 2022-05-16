<?php 

// NOTAS:
# Los nombres de las variables son sensibles a mayusculas y minisculas "Case-sensitive"
# Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ñ

// TIPOS de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: "Arreglo"(ES_US) o Matriz
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

// Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = "Marc";

// Entero
$numero = 22;

// Boleano
$verdadero_falso = true;

/* 
Comillas Simples vs Comillas Dobles
En las comillas dobles podemos llamar variables, mientras que en las simples no.
Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.
*/

echo 'Mi nombre es ' . $nombre;
echo '<br>';

echo "Mi nombre es $nombre";

// Para conocer el tipo de dato de una variable utilizamos la función gettype()
echo '<br>';
echo gettype($nombre) .'<br>';
echo gettype($numero) . '<br>';
echo gettype($verdadero_falso) . '<br>';
// Ejercicio: cambia los valores de las variables y escribe: "La variable $x es de tipo x y su valor es x"

echo 'La variable $nombre es de tipo ' . gettype($nombre) . ' y su valor es igual a ' . $nombre . '<br>';
echo 'La variable $numero es de tipo ' . gettype($numero) . ' y su valor es igual a ' . $numero . '<br>';
echo 'La variable $verdadero_falso es de tipo ' . gettype($verdadero_falso) . ' y su valor es igual a ' . $verdadero_falso . '<br>';
?>