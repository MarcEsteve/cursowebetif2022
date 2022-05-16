<?php
//---------Ejemplo de strings
    $x = "Hello world!";
    $y = 'Hello world!';
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    var_dump($x); //string(12) "Hello world!" tipo de variable y caracteres de esa variable de cadena de texto
    echo "<br>";
//---------Ejemplo de integer
    $x = 5985;
    var_dump($x); //int(5985)
    //devuelve valor y tipo
//---------Ejemplo de numeros en texto
    $foo = 1 + "10.5";                
    // $foo es float de valor (11.5)
    $foo = 1 + "-1.3e3";              
    // $foo es float de valor (-1299)
    //$foo = 1 + "bob-1.3e3";  ("descomentar para ver el error")         
    // Fatal error: Uncaught TypeError: Unsupported operand types: int + string in C:\xampp\htdocs\7.tipos-variables.php:20 Stack trace: #0 {main} thrown in C:\xampp\htdocs\7.tipos-variables.php on line 20 (No puedes operar con un texto no numerico)
    //$foo = 1 + "bob3"; ("descomentar para ver el error")                     
    // TypeError as of PHP 8.0.0, $foo is integer (1) previously (idem anterior)
    $foo = 1 + "10 Small Pigs";       
    // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    $foo = 4 + "10.2 Little Piggies"; 
    // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    $foo = "10.0 pigs " + 1;          
    // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    $foo = "10.0 pigs " + 1.0;        
    // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
//---------Ejemplo de numeros decimales float
    $a = 1.234;
    $b = 1.2e3;//entero con base decimal y exponente 10^3
    $c = 7E-10;
    $x = 1234456.3;
    $d = 1_234.567; // a partir de PHP 7.4.0
    echo $a," ",$b," ",$c," ",$x," ",$d;
    echo "<br>";
    $foo = True; // asigna el valor TRUE a $foo
    echo $foo;
?>