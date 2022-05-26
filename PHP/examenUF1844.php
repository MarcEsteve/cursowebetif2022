<?php
    //Codi PHP
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4'; // Equivalent a $impressio->tamany
        public $color = 'negre'; // Equivalent a $impressio->color
        //Metodes
        public function imprimeix($tinta,$paper,$tamany,$color){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany . ", en color " . $color;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }
    //Ejercicio 3
    $semana = ["dilluns","dimarts","dimecres","dijous","divendres","dissabte","diumenge"];
    //Ejercicio 4, primero ordenamos
    sort($semana);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <!-- Codi PHP Ejercicio 4 Ahora listamos los dias-->
    <ul>
        <?php
            foreach ($semana as $dia) {
                echo "<li>" . $dia . "</li>";
            }
        ?>
    </ul>
    <?php
            $hp = new Impressora(); //Creación del Objeto de la clase Impressora
            $xerox = new Impressora();
            $canon= new Impressora();
            echo $hp->tamany . ": Tamany de HP<br>";
            echo $xerox->tamany . ": Tamany de Xerox<br>";
            echo $canon->tamany . ": Tamany de Canon<br>"; 
            //1.Mostrar tamaño por defecto de canon
            $hp->tamany="DINA3";
            $xerox->tamany="DINA2";
            $canon->tamany="DINA5";
            //2. Cambiar tamaño por defecto de canon
            echo $hp->tamany . ": Tamany de HP actual<br>"; // Propiedad $tamany del objeto $hp el valor es "DINA2"
            echo $xerox->tamany . ": Tamany de Xerox actual<br>";
            //3. Mostrar tamaño actual de canon
            echo $canon->tamany . ": Tamany de Canon actual<br>";
            echo $hp->color . "<br>"; // Propiedad $color del objeto $hp el valor es "negre"
            //"Es pot imprimir en DINA4, en color negre"
            echo "Es pot imprimir en " . $hp->tamany . ", en color " . $hp->color;
            echo "<br>";
            $hp->imprimeix(true,true,"DINA4","negre");
            //4. Llamad al metodo imprimeix con canon para mostrar el mismo resultado que lo que pido en el examen
            echo "<br>";
            $canon->imprimeix(true,true,"DINA4","negre");
    ?>
    
</body>
</html>
