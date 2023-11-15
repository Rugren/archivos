<?php 
    require_once "conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BD1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $resultado = $conexion->query("select * from paises order by pais"); 
        //Solución con array
        while($row = mysqli_fetch_array($resultado)){
            echo "Nombre: " . $row["pais"] . "<br/>";
        }

        $resultado = $conexion->query("select * from paises order by pais");
        //Solución con objetos
        while($row = $resultado -> fetch_object()){
            echo "Nombre: " . $row->pais . "<br/>";
        } 
    ?> 
 
</body>
</html>