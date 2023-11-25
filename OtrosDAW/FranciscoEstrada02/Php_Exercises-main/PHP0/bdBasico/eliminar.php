<?php
    require_once "conexion.php";
    $id=$_GET["id"];
    $consulta="DELETE FROM clientes WHERE id=$id";
    $conexion->query($consulta);
    header("location: insertar04.php");