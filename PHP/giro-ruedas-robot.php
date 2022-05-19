<?php

// 2022 19 05 EJERCICIO ROBOT
// 1. Crea dos variables de velocidad de dos motores: $VelRizq, $VelRder tipo número entero.

// 2. En función del valor de cada rueda, decimos hacia donde se dirige. Ejemplo: $VelRizq>$VelRder entonces el robot gira a la derecha.
// Giro derecho, izquierdo y adelante, idem atrás
$VelRizq=0;
$VelRder=0;

if ($VelRizq>=0 && $VelRder>=0) {
    //O esta parado el robot o va hacia delante
    if ($VelRizq==0){
        if ($VelRizq==$VelRder) {
            echo "parado";
        } else {
            echo "Pivotando o girando hacia la izquierda";
        }   
    } else if ($VelRder==0){
        if ($VelRder==$VelRizq) {
            echo "parado";
        } else {
            echo "Pivotando o girando hacia la derecha";
        }
    } 
    else if ($VelRizq==0 &&$VelRder==0 ){
        echo "parado";
    } else {
        echo "Acelera";
    }  
} else {
    //Robot va hacia "atrás"
}


?>