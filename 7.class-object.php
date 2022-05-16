<?php 
//Creamos la clase Profesor
    class Profesor {
        //Atributos que son las propiedades del objeto
        public $nombre = 'Marc';
        public $apellido = 'Esteve';
        public $altura = 1.75;

        // echo $nombre; no funciona

        //Métodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    $persona = new Profesor();//Creamos OBJETO
    //echo gettype($persona); //Muestra tipo "object"
    echo 'El nombre del profesor es ' . $persona->nombre . ' ' . $persona->apellido . " con una altura de " . $persona->altura . 'm';
    $persona->hablar("<br>Un cordial saludo");

/*11/05/2022
EJERCICIO CLASS/OBJECT

1. Crear una class Coche que tenga atributos, mínimo el $color y métodos, mínimo el acelera($velocidad)
2. Instancia de la clase al objeto $tesla
3. Llamar a $color y a acelera() */

    class Coche
    {
        //Atributos que son las propiedades del objeto
        public $color  = 'Blanco';

        //Métodos
        public function acelera($velocidad){
            echo $velocidad;
        }
    }
    $tesla = new Coche(); // Realizamos una instancia de la clase Coche
    // Crea el objeto $tesla, heredando los atributos y métodos
    echo "<br>" . 'El color del coche es ' . $tesla->color . "<br>";
    echo 'La velocidad del coche es '; 
    $tesla->acelera("200 km/h"); //Asignamos valores a la variable argumento $velocidad


?>