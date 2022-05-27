<?php

// print_r($_SERVER);
#1. REVISAR DE QUE FORMA SE ENVIAN LOS DATOS
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se ha enviado por GET';
// } else {
//     echo 'Se ha enviado por POST';
// }

#2. REVISAR SI SE HA ENVIADO EL FORMULARIO COMPROBANDO SUBMIT
// if (isset($_POST['submit'])) {
//     echo 'Se han enviado los datos correctamente <br>';
//     print_r($_POST['submit']);
//     echo '<br>';
//     print_r($_POST);
// }
// if (isset($_POST['submit2'])) {
//     echo 'Se han enviado los datos correctamente del segundo formulario ';
//     print_r($_POST['submit2']);
// }

#3. EJERCICIO REVISAR SI SE HA ENVIADO POR POST O GET Y ADEMÁS EN EL FORMULARIO COMPROBAMOS QUE SUBMIT
$metodo= $_SERVER['REQUEST_METHOD'];
if ($metodo == 'GET') {//Enviado mediante GET
    if (isset($_GET['submit'])) {
        echo 'Se han enviado los datos correctamente en el formulario 1, mediante GET <br>';
    }
    if (isset($_GET['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante GET ';
    }
    // echo print_r($_GET);
    // echo print_r($_POST); //VACIO
} else { //Enviado mediante POST
    if (isset($_POST['submit'])) {
        echo 'Se han enviado los datos correctamente, mediante POST <br>';
        print_r($_POST['submit']);
        echo '<br>';
        print_r($_POST);
    }
    if (isset($_POST['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante POST ';
        print_r($_POST['submit2']);
    }
    echo print_r($_GET); //VACIO
    echo print_r($_POST);
}

?>