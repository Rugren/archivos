<?php 
  include "templates/header.php"; 
  include "conexion.php";
  if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
      $nombreFichero = date("Y-m-d - H-i-s")."-".$_FILES['photo']['name'];
      //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
      $file_loc = $_FILES['pohot']['tmp_name'];        
      //movemos el archivo a la carpeta deseada
      move_uploaded_file($file_loc,"uploads/".$nombreFichero); 
    }
    $nombre=escapar($_POST["nombre"]);
    $apellido=escapar($_POST["apellido"]);
    $modulo=$_POST["modulo"];
    $curso=$_POST["curso"];
    $photo=$_POST["imgUrl"];
    $consulta=$conexion->query("INSERT INTO profesores (nombre, apellido, modulo, curso,imgUrl) VALUES
      ('$nombre', '$apellido', '$modulo', '$curso','$photo')");
    echo "<p class='alert alert-success'>Registro del alumno $apellido, $nombre añadido</p>";
  }
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un profesor</h2>
      <hr>
      <form action="" method="post">
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
          <input type="modulo" name="modulo" id="modulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="number" name="curso" id="curso" class="form-control">
        </div>
        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" name="photo" id="photo" class="form-control">
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