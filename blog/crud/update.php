<?php
    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";
    require_once "../modelo/conexion.php";

    if (isset($_POST['submit'])) {

        if(isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name']!=""){
          $nombreFichero = date("Y-m-d - H-i-s")."-".$_FILES['imagen']['name'];

          //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
          $file_loc = $_FILES['imagen']['tmp_name'];        
          //movemos el archivo a la carpeta deseada
          move_uploaded_file($file_loc, "../img/".$nombreFichero); 

        }else{
          // así lo tenía antes $nombreFichero="imagen.jpg"; cambiado al imagen_actual_Oculta que es el que está en el form_update.php
          $nombreFichero=$_POST["imagen_actual_Oculta"];
        }

        if (isset($_POST["destacado"])) {
          $destacado = 1;
        }else{
          $destacado = 0;
        }

        $articulo=new Articulo();
        $articulo->setPropiedades($_POST["titulo"], $_POST["contenido"], $nombreFichero);
        $articulo->setFecha($_POST["fecha"]);
        $articulo->setId($_POST["id"]);
        $articulo->setDestacado($destacado);
        $repo=new RepositorioArticulos($conexion);
        $repo->update($articulo);
 
        header("location: index.php");
    }