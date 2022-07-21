<?php

    $conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

    // Check connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
  
    // sql to delete a record
    $sql = "DELETE FROM ejerciciocreate WHERE id=3";
    
    if (mysqli_query($conexion, $sql)) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar registro: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
?>