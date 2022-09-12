<?php 
require 'index-view.php';

function contar_usuarios(){
	$archivo = 'contador.txt';
	
	if ( file_exists($archivo)){
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	}  else {
		file_put_contents($archivo, 1);
		return 1;
	}
}

function reiniciar(){
	$archivo = 'contador.txt';
	file_put_contents($archivo, 0);
	return 1;
}



?>
