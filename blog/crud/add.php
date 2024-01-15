<?php

// Este archivo add.php es para añadir artículos.
    require_once "../modelo/conexion.php";
    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";

    // Esto cogido del crudd crear.php de TIENDA (que añadimos la línea que nos coja por defecto la imagen: if(isset($_FILES['imagen']) && $_FILES[... )
    if (isset($_POST['submit'])) {
        if(isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name']!=""){
        $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
        // Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
        $file_loc = $_FILES['imagen']['tmp_name'];

        // movemos el archivo a la carpeta deseada
        // move_uploaded_file($file_loc, $_SERVER["DOCUMENT_ROOT"] . "../img/" . $nombreFichero);
        // con el $_SERVER["DOCUMENT_ROOT"] no guarda la imagen al crearla, eliminado en la siguente línea y ya va 
        move_uploaded_file($file_loc, "../img/" . $nombreFichero);
        
        }else{
          $nombreFichero = "imagen.jpg";
        }

        // Para que nos coja el destacado al crear un artículo nuevo
        if (isset($_POST["destacado"])) {

          $destacado = 1;
        }else{
          $destacado = 0;
        }

        // +++ MANERA DE CREAR ARTÍCULOS 1. 
        // SE UTILIZA ESTE:
        $articulo=new Articulo();
        $articulo->setPropiedades($_POST["titulo"], $_POST["contenido"], $nombreFichero);
        $articulo->setFecha($_POST["fecha"]);
        $articulo->setDestacado($destacado);

        $conexion = new mysqli("localhost", "root", "", "blog"); 

        $repo=new RepositorioArticulos($conexion);
        $repo->save($articulo);

        // +++ MANERA DE CREAR ARTÍCULOS 2.
        /* $titulo = $_POST["descripcion"];
        $contenido = $_POST["contenido"];
        $fecha = $_POST["fecha"];
        $imagen = $nombreFichero;
        
        $consulta = $conexion->query("INSERT INTO articulos (titulo, contenido, fecha, imagen) VALUES
            ('$titulo', '$contenido', '$fecha', '$imagen')"); */

            // Para que nos mande al index del crud (puesto con ruta absoluta) una vez hayamos creado un artículo:
            header("location: /archivos/blog/crud/index.php");
            // header("location: index.php?mensaje=Artículo creado"); // Con esto no sale el mensaje de Artículo creado)
      }
      ?>

