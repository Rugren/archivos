<?php 
  include "templates/header.php"; 
  include "conexion.php";
  if (isset($_POST['submit'])) {
    $nombreFichero = date("Y-m-d - H-i-s")."-".$_FILES['imagen']['name'];
    //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
    $file_loc = $_FILES['imagen']['tmp_name'];        
    //movemos el archivo a la carpeta deseada
    move_uploaded_file($file_loc,"uploads/".$nombreFichero); 

    $nombre=escapar($_POST["nombre"]);
    $apellido=escapar($_POST["apellido"]);
    $email=$_POST["email"];
    $edad=$_POST["edad"];
    $imagen=$nombreFichero;
    $consulta=$conexion->query("INSERT INTO alumnosimg (nombre, apellido, email, edad, imagen) VALUES
      ('$nombre', '$apellido', '$email', $edad, '$imagen')");
    echo "<p class='alert alert-success'>Registro del alumno $apellido, $nombre añadido</p>";

  }
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un alumno</h2>
      <hr>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" name="edad" id="edad" class="form-control">
        </div>
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
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