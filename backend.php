<?php
    // capturar la opción que hará el backend, enviado desde el ajax por parametro en la url
    // ejemplo: localhost/backend.php?opcion=buscar
    include "database/dataBase.php";
    $opcion = $_GET["opcion"];
    $palabra = $_POST["buscaresto"];
    $retornar = null;
    switch ($opcion) {
        case 'buscar':
            // $retorno = array("palabra"=>$_POST[]);
            // $palabra = str_split($palabra);
            // $palabra = implode("-", $palabra);
            // $sql = "SELECT * FROM ferreteria.productos WHERE Nombre LIKE '%".$palabra."%';";
            $sql = "SELECT * FROM ferreteria.productos WHERE Nombre LIKE '%".$palabra."%';";
            $resultado = $conexion->query($sql);
            $productos = array();
            // $resultado = $resultado->num_rows;
            if($resultado->num_rows > 0){
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    $productos[] = $registro;
                }
            }
            // if($resultado){

            // }
            echo json_encode($productos);
        break;
        
        default:
            # code...
        break;
    }
?>