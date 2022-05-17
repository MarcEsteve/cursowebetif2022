<?php
// $color = "azul";
    //prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your name.";
    $name = prompt($prompt_msg);

    $output_msg = "Hello there ".$name."!";
    echo($output_msg);
?>
<?php if($name == "azul"){ ?>
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
<?php if($name == "rojo"){ ?>
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