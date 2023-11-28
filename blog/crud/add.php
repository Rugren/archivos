<?php

// Este archivo add.php es para añadir artículos, que lo hemos guardado como add.php

    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";
    require_once "../modelo/conexion.php";

    // Esto cogido del crudd crear.php de TIENDA (que añadimos la línea que nos coja por defecto la imagen: if(isset($_FILES['imagen']) && $_FILES[... )
    if (isset($_POST['submit'])) {
        if(isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name']!=""){
        $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
        $file_loc = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($file_loc, $_SERVER["DOCUMENT_ROOT"] . "../img/" . $nombreFichero);
        }else{
          $nombreFichero = "imagen.jpg";
        }

        // +++ MANERA DE CREAR ARTÍCULOS 1. 
        // SE UTILIZA ESTE:
        $articulo=new Articulo();
        $articulo->setPropiedades($_POST["titulo"], $_POST["contenido"], $nombreFichero);
        $articulo->setDestacado($destacado);
        $articulo->setFecha($_POST["fecha"]);

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


            header("location: index.php");
            // ++++antes tenía este, si da fallo el de la línea anterior, poner este: header("location: form_add.php");
      }
      ?>

