<?php
include_once("../modelo/RepositorioArticulos.php");
include_once("../modelo/Articulo.php");
include_once("../modelo/conexion.php");


$id = $_GET["id"];

$repositorio = new RepositorioArticulos($conexion);

$repositorio->deleteById($id);

header("location: index.php");

exit;



