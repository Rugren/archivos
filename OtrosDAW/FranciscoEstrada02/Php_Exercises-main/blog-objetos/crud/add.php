<?php
require_once "../modelo/Articulo.php";
require_once "../modelo/RepositorioArticulos.php";
require_once "../modelo/conexion.php";

if (isset($_POST['submit'])) {
  if (isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name'] != "") {
      $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
      
      $file_loc = $_FILES['imagen']['tmp_name'];
      
      move_uploaded_file($file_loc, "../img/" . $nombreFichero);
  } else {
      $nombreFichero = "imagen.jpg";
  }

 
  $destacado = isset($_POST['destacado']) ? 1 : 0;

  // Crear un objeto Articulo
  $articulo = new Articulo();
  $articulo->setPropiedades($_POST["titulo"], $_POST["contenido"], $nombreFichero); 
  $articulo->setDestacado($destacado);
  $articulo->setFecha($_POST["fecha"]);

 
  $conexion = new mysqli("localhost", "root", "", "blog"); 
  $repo = new RepositorioArticulos($conexion);
  $repo->save($articulo);

  header("location: index.php");
}
