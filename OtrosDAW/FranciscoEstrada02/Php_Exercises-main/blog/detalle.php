<?php
session_start();
require_once("templates/header.php");
require_once("modelo/Articulo.php");
require_once("modelo/RepositorioArticulos.php");
require_once("modelo/conexion.php");

$art = unserialize($_SESSION["listadoArticulos"]);


$id = $_GET["id"];

$repo = new RepositorioArticulos($conexion);

$articulo = $repo->findById($id);

echo $articulo->mostrar();

require_once("templates/footer.php");
?>

