<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <?php require_once("conexion.php"); ?>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <?php

    if (isset($_POST['submit'])) {
      if (isset($_POST['submit'])) {
        $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['img']['name'];
        $file_loc = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_loc, "../img/" . $nombreFichero);
      }
      $nombre = ($_POST["nombre"]);
      $descripcion = $_POST["descripcion"];
      $precio = $_POST["precio"];
      $stock = $_POST["stock"];
      $img = $nombreFichero;
      $consulta = $conexion->query("INSERT INTO productos (nombre, descripcion, precio, stock, img) VALUES
        ('$nombre', '$descripcion', '$precio', '$stock', '$img')");
      echo "<p class='alert alert-success'>Registro del producto $nombre añadido</p>";
    }
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-4">Crea un nuevo producto</h2>
          <hr>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="decimal" name="precio" id="precio" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="number" name="stock" id="stock" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="img">Photo</label>
              <input type="file" name="img" id="img" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
              <a class="btn btn-primary" href="admin.php">Regresar al inicio</a>
            </div>

          </form>
        </div>
      </div>

    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>