<?php
require_once("conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM employees WHERE id=$id";
$conexion -> query($sql);

header("location: index.php?mensaje=Succesfully_Delete");