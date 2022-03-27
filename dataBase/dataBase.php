<?php
    $servidor = "localhost";
    $usuario = "root";
    $password ="";
    $nameBd = "ferreteria";

    $conexion = new mysqli($servidor, $usuario, $password, $nameBd);

    // print_r($conexion);

    
    if ($conexion -> connect_error) {
        die("la conexion ha fallado" . $conexion->connect_error);
        return false;
    }
?>

