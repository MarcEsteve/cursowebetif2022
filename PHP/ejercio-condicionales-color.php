<?php
// $color = "azul";
    //prompt function
    function prompt($prompt_msg){
        echo("<script> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script> this.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Escribe tu color:";
    $color = prompt($prompt_msg);
	echo $color;

    // $output_msg = "Hello there ".$name."!";
    // echo($output_msg);
?>
<?php if($color == "azul"){ ?>
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>Ejercicio de color azul</title>
		</head>
		<body>
			<h1>Color azul escogido</h1>
		</body>
	</html>
<?php } ?>
<?php if($color == "rojo"){ ?>
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>Ejercicio color Rojo</title>
		</head>
		<body>
			<h1>Color rojo escogido</h1>
		</body>
	</html>
<?php } ?>