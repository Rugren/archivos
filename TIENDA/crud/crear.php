<?php
include "templates/header.php";
include "conexion.php";

if (isset($_POST['submit'])) {
  if(isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name']!=""){ // Esta línea es la que hace que nos coja por defecto la imagen
  $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
  //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
  $file_loc = $_FILES['imagen']['tmp_name'];
  //movemos el archivo a la carpeta deseada
  move_uploaded_file($file_loc, $_SERVER["DOCUMENT_ROOT"] . "/img/" . $nombreFichero); // así antes: move_uploaded_file($file_loc, "../img/" . $nombreFichero); pero puesto: $_SERVER["DOCUMENT_ROOT"] . para que no de fallos de seguridad
  }else{
    $nombreFichero = "imagen.jpg";
  } // el else añadido para que coja por defecto esa imagen.jpg

  $nombre = escapar($_POST["nombre"]);
  $descripcion = escapar($_POST["descripcion"]);

  $imagen = $nombreFichero;
  $precio = $_POST["precio"];
  $consulta = $conexion->query("INSERT INTO productos (nombre, descripcion, imagen, precio) VALUES
      ('$nombre', '$descripcion', '$imagen', $precio)"); // precio puesto, y poner siempre, sin comillas, porque es nº, no es un VARCHAR
  echo "<p class='alert alert-success'>Registro del producto $nombre añadido</p>";

}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un producto</h2>
      <hr>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <textarea class="form-control" name="descripcion">
        </textarea>
        <!-- ponemos text area porque descripción es un campo largo-->
        </div>

        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="number" step="any" name="precio" id="precio" class="form-control">
          <!-- step="any" pone decimales -->
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