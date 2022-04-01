<?php
    define("RUTA_IMAGENES", "http://".$_SERVER["HTTP_HOST"]."/busqueda/imagenes/");
    $servidor = "localhost";
    $usuario = "root";
    $password ="";
    $nameBd = "comercial";

    $conexion = new mysqli($servidor, $usuario, $password, $nameBd);

    // print_r($conexion);

    
    if ($conexion -> connect_error) {
        die("la conexion ha fallado" . $conexion->connect_error);
        return false;
    }
?>

