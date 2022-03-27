<?php

$mostrar = $_GET["mostrar"];

switch ($mostrar) {
    case 'producto':
        require "backend/backend.php";
    break;
    
    default:
        # code...
    break;
}

?>