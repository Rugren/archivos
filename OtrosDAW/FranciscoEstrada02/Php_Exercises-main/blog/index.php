<?php
session_start();
require_once("modelo/Articulo.php");
require_once("modelo/RepositorioArticulos.php");
require_once("templates/header.php");
require_once("modelo/conexion.php");

$rep = new RepositorioArticulos($conexion);


$articulos=$rep->findAll();

if(empty($articulos) || sizeof($articulos)< 1)
{
    $a = new Articulo();
    $a->setPropiedades("Holaaaa","holaaaaaaaaaa","hola.jpg");
    $rep->save($a);
}

foreach ($articulos as $a) {

    echo "<a href='detalle.php?id=" . $a->getId() ."'><h2>" . $a->mostrarmini() . "</h2></a>";
}

require_once("templates/footer.php");

?>