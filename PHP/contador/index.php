<?php 
function contar_usuarios(){
	$archivo = 'contador.txt';

	if ( file_exists($archivo) ) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}

require 'index-view.php';

?>
