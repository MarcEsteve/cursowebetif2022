<?php

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