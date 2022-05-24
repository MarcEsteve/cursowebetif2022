<?php

//SCOPE = ALCANCE
$numero = 7; //Variable global = acceso desde cualquier parte del código excepto dentro de funciones
echo $numero; //Muestro el 7
// function mostrarNumero(){
// 	$numero = 13;
// 	echo $numero;
// }
// mostrarNumero(); // Dará un error, ya que no encuentra $numero dentro de la función
//echo $numero;//Muestro el 7


# Para usarla dentro de la función pasar como parámentro/argumento
// function mostrarNumero($numero){
// 	echo $numero;
// }
// mostrarNumero(13); //Solo dentro de la funció vale 13
// echo $numero; //Fuera sigue valiendo el 7

# Lo mismo si definimos en la función y queremos utilizarla fuera
// function mostrarNumero(){
// 	$numero = 10;
// }
// mostrarNumero();
// echo $numero; //No se puede acceder porque la variable esta dentro de la función, necesitaremos el "return"

function mostrarNumero(){
	$numero = 10;
	return $numero;
}

// function mostrarNumero(){
// 	$numero = 10;
// 	echo $numero;
// }

mostrarNumero();//10
$numero = mostrarNumero(); //Asigno $numero =10;
echo $numero; //10

#RESUMEN:
//1. Por parámetro para entrar la variable en la función
//2. Con el return para sacar la variable de la función

?>