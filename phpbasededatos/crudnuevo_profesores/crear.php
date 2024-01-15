<?php 
  include "templates/header.php"; 
  include "conexion.php";
    if (isset($_POST['submit'])) { // esto cogido de la carpeta curduploadnuevo/crear.php
      $nombreFichero="";
      if (isset($_FILES["imagen"])){
      $nombreFichero = date("Y-m-d - H-i-s")."-".$_FILES['imagen']['name']; // name cambiar por nombre??
      //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
      $file_loc = $_FILES['imagen']['tmp_name'];        
      //movemos el archivo a la carpeta deseada
      move_uploaded_file($file_loc,"img/".$nombreFichero); // cambiar "uploads/" por una carpeta donde guardar la imagen?
      }
    $nombre=escapar($_POST["nombre"]);
    $apellido=escapar($_POST["apellido"]);
    $modulo=escapar($_POST["modulo"]);
    $curso=escapar($_POST["curso"]);
    $imagen=escapar($_POST["imagen"]);
    $consulta=$conexion->query("INSERT INTO profesores (nombre, apellido, modulo, curso, imagen) VALUES
      ('$nombre', '$apellido', '$modulo', '$curso', '$imagen')");
    echo "<p class='alert alert-success'>Registro del profesor $apellido, $nombre añadido</p>";
  }
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un profesor</h2>
      <hr>
      <form action="" method="post" enctype="multipart/form-data"> <!-- añadido esto para poner la imagen enctype="multipart/form-data" -->
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <div class="form-group">
          <label for="modulo">Modulo</label>
          <input type="text" name="modulo" id="modulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="number" name="curso" id="curso" class="form-control">
        </div>

        <div class="form-group">
          <label for="imagen">Avatar</label>
          <input type="file" accept="img/*." name="imagen" id="imagen" class="form-control">
          <!-- El accept="img/*." es para que acepte todas las imágenes-->
        </div>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
        </div>
      </form>
    </div>
  </div>
  
</div>

<?php include "templates/footer.php"; ?>