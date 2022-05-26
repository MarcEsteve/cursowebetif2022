<?php
    //Codi PHP
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4';
        public $color = 'negre';
        //Metodes
        public function imprimeix($tinta,$paper,$tamany){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <!-- Codi PHP-->
</body>
</html>
