<?php
    // ¡CUIDADO AHORA! estamos dentro de la carpeta crud(que salga atrás con ../ ) y tenemos que coger dentro de la carpeta modelo
    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";
    require_once "../modelo/conexion.php";

    require_once "../templates/header.php";

    $repo=new RepositorioArticulos($conexion);

    $lista = $repo->findAll();

    echo "<div class='container'>";

    echo "<a class='btn btn-primary' href='form_add.php'>Añadir artículo</a>";

    echo "<table class='table'>";
    echo "<tr><th>Id</th><th>Título</th><th>Acciones</th></tr>";

    foreach($lista as $articulo){
        echo "<tr><td>$articulo->id</td>";
        // echo "<td>$articulo->contenido</td>";
        echo "<td>$articulo->titulo</td>";
        echo "<td><a href='form_update.php?id=$articulo->id'>Modificar</a></td>";
        echo "<td><a href='delete.php?id=$articulo->id'>Borrar</a></td></tr>";
    }

    echo "<table>";

    require_once "../templates/footer.php";


