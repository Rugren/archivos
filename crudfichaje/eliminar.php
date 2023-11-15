<?php
require_once "conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM trabajadores where id=$id";
$conexion->query($sql);
header("location: index.php?mensaje=empleado eliminado");

