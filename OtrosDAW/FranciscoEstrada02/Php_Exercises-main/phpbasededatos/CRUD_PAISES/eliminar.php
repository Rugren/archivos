<?php
require_once("conexion/conexion2.php");

$id = $_GET["id"];

$sql = "DELETE FROM paises WHERE id=$id";


$conexion2 -> query($sql);

header("location: index.php?mensaje=REGISTRO BORRADO");

