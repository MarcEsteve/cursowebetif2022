<?php

    class Persona {
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Métodos
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre; // $this hace referencia a cualquier objeto que lo llame, es decir, tanto a $persona como a $marc.
            $this->apellido[] = $apellido;
        }
        public function formato($nombre, $apellido){
            echo 'Nombre: ' . $nombre . ' | Apellido: ' . $apellido . '<br>';
        }
        public function mostrar(){
            for($i=0; $i<count($this->nombre); $i++){
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
    }

    $persona = new Persona();
    $marc = new Persona();
    //Creo con la instancia a la clase Persona los dos objetos persona y marc
    $persona->guardar('Jose', 'Fernández');
    $persona->mostrar();
    $persona->guardar('Arnau', 'Garcia');
    $persona->guardar('Pedro', 'Ximenez');
    $persona->mostrar();
    //Creación de segundo objeto
    $marc->guardar('Marc', 'Esteve');
    $marc->mostrar();
    // echo $persona->nombre[0]; 
    // echo $persona->apellido[0]; 
    
    echo gettype($persona); //Muestra tipo "object"
    $x = "Hello world!";
    var_dump($x);
    $x = null;
    var_dump($x);

?>