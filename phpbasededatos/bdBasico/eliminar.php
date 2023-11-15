<?php
    require_once "conexion.php";
    $id=$_GET["id"];
    $consulta="DELETE FROM clientes WHERE id=$id";
    $conexion->query($consulta);
    // header("location: insertar04.php"); // así es como estaba
    header("location: insertar04.php?id=$id&eliminar=1"); // Esta parte de código añadido en clase