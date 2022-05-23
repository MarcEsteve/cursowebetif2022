<!-- 2022 23 05 EJERCICIO REQUIRE 
1. Creamos el arxhivo index3.php y el archivo vista3.php 
2. En el index ponemos un h1 y un require a continuación llamando a vista3.php
3. en vista pondremos un h2 que llamará a una variable $subtitular y un párrafo
4. En index  le daremos valor de string a la variable $subtitular
5. Repetiremos el paso 2 habiendo cambiado el valor de $subtitular -->

<?php 
$subtitular ="Subtitular 1 del ejercicio Require";
echo "<h1>Index 3 del ejercicio</h1>";
require "vista3.php";
$subtitular ="Subtitular 2";
require "vista3.php";
?>