<?php
include "conexion.php";

//Cuando mostramos la página con el formulario y los datos del profesor
if (!isset($_GET['id'])) { //Si no nos pasan el id del profesor        
  echo "El profesor no existe";
} else {
  $id = $_GET['id'];
  $consultaSQL = "SELECT * FROM profesores WHERE id =" . $id;

  $sentencia = $conexion->query($consultaSQL);
  $profesor = $sentencia->fetch_object();
  if ($profesor) {
    $nombre = $profesor->nombre;
    $apellido = $profesor->apellido;
    $modulo = $profesor->modulo;
    $curso = $profesor->curso;
    $imagen = $profesor->imagen;
  } else {
    echo 'No se ha encontrado el profesor';
  }

}

//Cuando nos envían los datos del profesor desde el formulario y tenemos que actualizarlo
if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $modulo = $_POST['modulo'];
  $curso = $_POST['curso'];
  $imagen = $_POST['imagen'];


  // ASÍ ES COMO ESTABA, que no funcionaba, pero metido lo nuevo abajo sin comentar.
  //   $consultaSQL = "UPDATE profesores SET  nombre = '$nombre', apellido = '$apellido', modulo = '$modulo',  curso = '$curso', imagen = '$imagen' ";
  //   $consultaSQL .= "updated_at = NOW() WHERE id = $id";

  //   $consulta = $conexion->query($consultaSQL); /* ESTA PARTE NO FUNCIONA, preguntar a ANTONIO,
  //   porque al subir la foto no actualiza bien y da error aquí, como al acceder a la bd. */ 


  //   header("Status: 301 Moved Permanently");
  //   header("Location: index.php");
  //   exit;
  // }

  //Si no pasan nombre de fichero, mantenemos la que había. Si pasan nombre, subimos el nuevo fichero        
  if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") { //Si nos pasan un nuevo fichero
    $imagen = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
    $file_loc = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($file_loc, "img/" . $imagen);
    $consultaSQL = "UPDATE profesores SET  nombre = '$nombre', apellido = '$apellido', modulo = '$modulo',  curso = '$curso', imagen = '$imagen' ";
    $consultaSQL .= "imagen = '$imagen', updated_at = NOW() WHERE id = $id";
  } else {
    //NO nos han pasado fichero, no tenemos que modificarlo, en la consulta no añadimos imagen
    $consultaSQL = "UPDATE profesores SET  nombre = '$nombre', apellido = '$apellido', modulo = '$modulo',  curso = '$curso', imagen = '$imagen' ";
    $consultaSQL .= "updated_at = NOW() WHERE id = $id";
  }
  $consulta = $conexion->query($consultaSQL); /* ESTA PARTE NO FUNCIONA, preguntar a ANTONIO,
  porque al subir la foto no actualiza bien y da error aquí, como al acceder a la bd. */ 
  header("Status: 301 Moved Permanently");
  header("Location: index.php");
  exit;
}

?>

<?php require "templates/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Editando el profesor
        <?= escapar($nombre) . ' ' . escapar($apellido) ?>
      </h2>
      <hr>
      <form method="post">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" value="<?= escapar($nombre) ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" value="<?= escapar($apellido) ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="modulo">Modulo</label>
          <input type="text" name="modulo" id="modulo" value="<?= escapar($modulo) ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="number" name="curso" id="curso" value="<?= escapar($curso) ?>" class="form-control">
        </div>

        <div class="form-group">
          <label for="imagen">Avatar</label>
          <input type="file" accept="img/*." name="imagen" id="imagen" value="<?= escapar($imagen) ?>"
            class="form-control">
          <!-- El accept="img/*." es para que acepte todas las imágenes-->
        </div>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
          <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require "templates/footer.php"; ?>