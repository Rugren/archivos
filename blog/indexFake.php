<?php
    // el inicio de sessión se pone siempre en la primera línea
    session_start();
    require_once "modelo/Articulo.php";
    require_once "modelo/RepositorioArticulos.php";
    require_once "templates/header.php";
    require_once "modelo/conexion.php";


    // *INICIO* CODIGO SIN BASE DE DATOS HECHOS CON ARRAY (hemos nombrado este archivo indexFake.php)
    // con el []; lo empuja, hace un push
    $art=[];
    $art[]=new Articulo();
    $art[0]->setPropiedades("Gran titular", "Clickbait", "imagen.jpg");
    $art[0]->setId(0);

    // echo $art->mostrar(); // Esto era para comprobar que estaba bien
    $art[]=new Articulo();
    $art[1]->setPropiedades("Mbappe se lo piensa", "No sabe si pedir Pepsi o Coca-Cola", "imagen.jpg");
    $art[1]->setId(1);

    $art[]=new Articulo();
    $art[2]->setPropiedades("No te vas a creer lo que contiene una patata del Mercadona", "Un tubérculo", "imagen.jpg");
    $art[2]->setId(2);
    // *FIN* hasta aquí lo de archivo indexFake.php ya que en el index normal index.php lo hemos eliminado y hecho desde 0


    // Hacemos un bucle para que se muestren todos los artículos
    foreach ($art as $a) {
        echo "<a href='detalle.php?id=" . $a->getId() . "'><h2>" . $a->mostrarMini() . "</h2></a>";
    }

    $_SESSION["listadoArticulos"] = serialize($art);
    





    require_once "templates/footer.php";


?>