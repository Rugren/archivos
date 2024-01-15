<?php
    require_once "../piscina2023.php";
    $id=$_GET["id"];
    $sql="DELETE FROM piscina2023 WHERE id=$id";
    $conexion->query($sql);
    header("location: index.php");