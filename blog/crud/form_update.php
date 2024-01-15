<?php
  // quitada la cabecera require_once("../templates/header.php"); y puesto abajo el echo del <header>
  require_once("../modelo/Articulo.php");
  require_once("../modelo/RepositorioArticulos.php");
  require_once("../modelo/conexion.php");


  $id=$_GET["id"];
  $repo=new RepositorioArticulos($conexion);
  $articulo=$repo->findById($id);

  // Cabecera (editar en cada parte del CRUD su nombre de title)
  echo "
    <html lang='es'>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Formulario para modificar artículos (CRUD)</title>";

    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    </head> ";
    
    echo "
    <header class='d-flex justify-content-center'>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid' style='background-color: #2f8b13;'>
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

<!-- Copiado tal cual de form_add.php -->
<!-- Hemos cambiado el h1, y en el <form action hemos puesto ="update.php..."  -->
<!-- Cambiado: id="contenido" name="contenido" por: class="form-control" id="titulo" y añadido value= -->
<!-- El value de php poner en la mayoría de los input -->
<div class="container">
  <h1>Formulario para modificar artículos</h1>

  <!-- Aquí se lee con el get AQUÍ SE HARÍA CON EL -->
  <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
  <!-- Con POST se haría: -->
  <input type="hidden" name="id" value='<?php echo $id ?>'>
  <!-- el: value="< ?php echo $id ?>"> estaba puesto con comillas dobles, dejar con las simples por si acaso no funcionase -->

    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo $articulo->getTitulo();?>' required>
    </div>

    <div class="mb-3">
      <label for="contenido" class="form-label">Contenido</label>
      <textarea class="form-control" id="contenido" name="contenido" rows="3" required><?php echo $articulo->getContenido();?></textarea>
    </div>
    
    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen</label>
      <!-- El "imagen_actual_Oculta" debe ser igual que en el update, cambiarlo para que coincida el nombre 
      El hidden oculta la ruta para que no vea dónde hemos guardado la imagen (nuestra carpeta) -->
      <input type="hidden" name="imagen_actual_Oculta" value="<?php echo $articulo->getImagen(); ?>">
      <input type="file" class="form-control" id="imagen" name="imagen">
      <img src="../img/<?php echo $articulo->getImagen();?>" style="height: 100px;">
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" name="fecha" value='<?php echo $articulo->getFecha();?>' required>
    </div>

    <div class="mb-3">
      <label for="destacado" class="form-label">Destacado</label>
      <input type="checkbox" class="form-label" id="destacado" name="destacado" <?php echo $articulo->getDestacado() == 0 ? "" : "checked" ?>>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Modificar Artículo</button>
  </form>
  <div class="container my-5">
    <a href="index.php" class="btn btn-outline-dark">Volver al listado</a>
  </div>
</div>