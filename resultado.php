<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
</head>
<body>
	<?php
		include "database/dataBase.php";
		$palabra = $_POST["search"];
		$productos = array();
		if(!empty($palabra)){
            if(!empty($palabra)){
                $sql = "SELECT * FROM comercial.productos WHERE Nombre LIKE '%".$palabra."%';";
                $resultado = $conexion->query($sql);
                if($resultado->num_rows > 0){
                    while ($registro = mysqli_fetch_assoc($resultado)) {
                        $productos[] = $registro;
                    }
                }
            }
		}
		if(!empty($productos)){
			echo "<ul>";
			foreach ($productos as $key => $value) {
				$src = RUTA_IMAGENES.$value["idproductos"].".jpg";
				echo "<li>".$value["idproductos"].": ".$value["nombre"]."<img src='".$src."'  style='width: 60px;'/></li>";
			}
			echo "</ul>";
		}
	?>
</body>
</html>