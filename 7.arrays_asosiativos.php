<?php 

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas explícita. 
//$variable = array ("clave" => "valor")

$profesor = array('nombre' => 'Marc', 'telefono' => 665533, 'edad' => 35, 'apellido' => 'Esteve', 'ciudad' => 'Castelldefels');

# Igual que en los arrays indexados, en los asosiativos también podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve García';

echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su teléfono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';

$array = array(
    "1" => 3,
    "2" => "dsada",
    "1.5" => 1.5,
    "booleano" => true,
);
echo $array["1"] . '<br>';
echo $array["2"] . '<br>';
echo $array["1.5"] . '<br>';
echo $array["booleano"] . '<br>';
var_dump($array);
// Sintaxis corta
echo '<br><br>';
$otravaraiblearray = [
    "clave" => "valor1",
    "clave2" => "valor2",
    "clave3" => "valor3"
];
$varible3 = [1,2,3];
var_dump($otravaraiblearray);
echo '<br><br>';

/*EJERCICIO 2. Utilizando el archivo del campus "7.arrays_asociativos.php" escribir el siguiente texto:

"El teléfono 665533 es de Marc que vive en Torrelles de Foix"

Asignar un valor nuevo a la clave "ciudad"
*/
echo "//EJERCICIO 2 con variables asociativas <br>";
$profesor['ciudad']="Torrelles de Foix";
echo "El teléfono " . $profesor['telefono'] . " es de ". $profesor['nombre'] . " que vive en " . $profesor['ciudad'];

?>