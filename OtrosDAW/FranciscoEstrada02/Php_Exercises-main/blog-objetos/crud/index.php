<?php
    require_once "../templates/header.php";
    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";
    require_once "../modelo/conexion.php";


    $repo=new RepositorioArticulos($conexion);

    $lista = $repo->findAll();

    echo "<div class='container'>";

    echo "<a class='btn btn-primary' href='form_add.php'>Añadir artículo</a>";

    echo "<table class='table'>";
    echo "<tr><th>Id</th><th>Título</th><th>Destacado</th><th>Modificar</th><th>Borrar</th></tr>";
    
    foreach($lista as $articulo){

        echo "<tr><td>$articulo->id</td>";
        echo "<td>$articulo->titulo</td>";
        echo "<td>".($articulo->destacado == 0 ? "No" : "Si")."</td>";
        echo "<td><a href='form_update.php?id=$articulo->id'> Modificar </a>"; 
        echo "<a href='delete.php?id=$articulo->id'>Borrar</a></td></tr>";
    }
    
    echo "</table></div>";

    require_once "../templates/footer.php";

