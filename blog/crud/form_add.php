<?php
  // quitada la cabecera require_once("../templates/header.php"); y puesto abajo el echo del <header>
  require_once("../modelo/Articulo.php");
  require_once("../modelo/RepositorioArticulos.php");
  require_once("../modelo/conexion.php");
  
  // Cabecera (editar en cada parte del CRUD su nombre de title)
  echo "
    <html lang='es'>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Formulario para añadir artículos (CRUD)</title>";

    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    </head> ";
    
    echo "
    <header class='d-flex justify-content-center'>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid' style='background-color: #138b81;'>
            <a class='navbar-brand' href='/archivos/blog/index.php'>Blog Rubén García</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                <div class='navbar-nav'>
                    <a class='nav-link' aria-current='page' href='/archivos/blog/index.php'>Inicio</a>
                    <a class='nav-link' href='/archivos/blog/crud/index.php'>CRUD</a>
                </div>
            </div>
        </div>
    </nav>
    </header> ";
?>

<div class="container">
  <!-- Formulario para añadir artículos -->
  <h1>Añadir articulo</h1>

  <form action="add.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="mb-3">
      <label for="contenido" class="form-label">Contenido</label>
      <textarea class="form-control" id="contenido" name="contenido" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" name="fecha" required>
    </div>

    <div class="mb-3 form-check">
    <input class="form-check-input" type="checkbox" id="destacado" name="destacado">
    <label class="form-check-label" for="destacado">Destacado</label>
    </div>
    <!-- <div class="mb-3">
      <label for="destacado" class="form-label">Destacado</label>
      <input type="checkbox" class="form-label" id="destacado" name="destacado">
    </div> -->
    
    <button type="submit" name="submit" class="btn btn-primary">Crear Artículo</button>
  </form>
  <div class="container my-5">
    <a href="index.php" class="btn btn-outline-dark">Volver al listado</a>
  </div>
</div>

<?php
require_once "../templates/footer.php";
?>