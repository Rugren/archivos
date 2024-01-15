<?php
session_start();

$titulo="Inicio";

require_once "modelo/Articulo.php";
require_once "modelo/RepositorioArticulos.php";
require_once "templates/header.php";
require_once "modelo/conexion.php";

//Utilizo la conexión que se crea en conexion.php para pasarla como parámetro al repo
$rep = new RepositorioArticulos($conexion);

$articulos = $rep->findAll();


$a = new Articulo();
?>
<div class="text-blak d-flex flex-column align-items-center ">
    <h1>Blog de Francisco Estrada</h1>
    <h4>Contenido del blog de Francisco Estrada</h4>
</div>

<?php
    $rep->mostrarCorousel();
?>



<div class="d-flex">
    <?php
    foreach ($articulos as $a) {
        $a->mostrarCard();
    }
    ?>
</div>

<?php


require_once "templates/footer.php";
?>