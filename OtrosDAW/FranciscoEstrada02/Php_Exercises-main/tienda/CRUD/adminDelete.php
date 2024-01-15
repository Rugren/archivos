<?php
require_once("conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM productos WHERE id=$id";
$conexion -> query($sql);

header("location: admin.php?mensaje=Succesfully_Delete");