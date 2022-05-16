<?php
echo "1 Hola mundo";
echo '<br>';
echo "2 Esto abarca
multiple líneas. Los saltos de línea también
se mostrarán";
echo '<br>';
echo nl2br("3 Esto abarca\nmúltiples líneas. Los saltos de línea también\nse mostrarán."); //FUNCIONA SIEMPRE
echo '<br>';
echo "4 Esto abarca\nmúltiples líneas. Los saltos de línea también\nse mostrarán.";
echo '<br>';
echo "5 Para escapar caracteres se hace \"así\".";
echo '<br>';
echo '6 Para comillas dobles, utilizamos comillas simples "así".';
echo '<br>';
echo "7 Al revés de comillas 'así'.";
echo '<br>';

// Se pueden usar variables dentro de una sentencia echo
$pepito = "nombre ";
$bar = "apellido";

echo "fdsfgsdf es $pepito"; // fdsfgsdf es es nombre
#Las comillas dobles admiten $variables sin concatenar pero podria dar problemas de seguridad
echo '<br>';
echo 'fdsfgsdf es '. $pepito;
echo '<br>';
// También se pueden usar arrays
$baz = array("clave" => "valor");

echo "Esto es {$baz['clave']} !"; // Esto es valor !

echo '<br>';
// Si se utilizan comillas simples, se mostrará el nombre de la variable, no su valor
echo 'foo es $pepito'; // foo es $pepito
echo 'foo es '. $pepito; // $pepito muestro valor
echo "foo es $pepito"; // foo es nombre
echo '<br>';
// Si no usan otros caracteres, se puede utilizar echo para mostrar el valor de las variables.
echo $pepito;
echo '<br>';         
echo $pepito,$bar," multiples parámetros ",4; //echo admite múltiples parámetros     
echo '<br>';
// Las cadenas pueden ser pasadas individualmente como varios argumentos o
// concatenadas como un único argumento
echo 'Esta '. 'cadena ', 'está '. 'hecha '. 'con múltiple parámetros.';
echo '<br>';
echo 'Esta ' . 'cadena ' . 'está ' . 'hecha ' . 'con concatenación.' . "\n";

echo '<br>';
$variable = "variable";

echo <<<END
Aquí se utiliza la sintaxis de "here document" para mostrar
múltiples líneas con interpolación de $variable. Nótese
que el finalizador de here document debe aparecer en una 
línea con solamente un punto y coma. ¡Nada de espacios extra!
END;

// Ya que echo no se comporta como una función, el siguiente código no es válido.
//($variable) ? echo 'true' : echo 'false';

// Sin embargo, el siguiente código funcionará:
($variable) ? print 'true' : print 'false'; // print también es una construcción, pero se comporta como una función, por lo que puede usarse en este contexto.
echo $variable ? 'true': 'false'; // dando la vuelta a la declaración
?>