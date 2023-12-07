<?php
    require_once "conexion.php";
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $consulta="DELETE FROM equipos WHERE id=$id";
        $conexion->query($consulta);

        header("location:index.php");

    }