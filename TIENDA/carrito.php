<?php
    session_start();
    if (empty($_GET["id"])){

    }else{
        $id = $_GET["id"];
        if(empty($_SESSION["listaproductos"])){
            $lista=[$id];
            /* $lista= nos lo hemos inventado, es el array como del carrito de la lista de la compra: listaproductos*/
            // Esto lo veremos más adelante, es como se hace $lista=[["id"=> $id, "cantidad"=> 1]];
            $_SESSION["listaproductos"]=serialize($lista);
        }else{
            // Recupero la lista de artículos en el carrito y la "deserializo"
            $lista=unserialize($_SESSION["listaproductos"]);
            // Añado el nuevo id a la lista.
            $lista[]=$id;
            // Esto lo veremos más adelante, es como se hace $lista=[["id"=> $id, "cantidad"=> 1]];
            $_SESSION["listaproductos"]=serialize($lista);
        }
    }

    // Coge la dirección anterior de dónde venía el usuario, para volver a mandarte a ella:
    $url=$_SERVER['HTTP_REFERER'];
    header("location: " . $url);
    // Este solo nos valdría para esta página: 
    // header("location: detalle.php?id=" . $id);
 