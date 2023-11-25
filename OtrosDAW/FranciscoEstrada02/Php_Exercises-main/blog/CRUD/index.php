<?php
require_once("../modelo/Articulo.php");
require_once("../modelo/RepositorioArticulos.php");
require_once("../templates/header.php");
require_once("../modelo/conexion.php");


$repo = new RepositorioArticulos($conexion);

$lista = $repo->findAll();
?>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($lista as $articulo){
        echo "<tr><td>$articulo->id</td>
                <td>$articulo->contenido</td>
                <td>Modificar Borrar</td>
        </tr>";
    } ?>
</table>

<?php

require_once("../templates/footer.php");

?>