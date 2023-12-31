<?php
require_once "../templates/header.php";
require_once "../modelo/Articulo.php";
require_once "../modelo/RepositorioArticulos.php";
require_once "../modelo/conexion.php";

$id = $_GET["id"];
$repo = new RepositorioArticulos($conexion);
$articulo = $repo->findById($id);
?>

<div class="container">
  <h1>Formulario para modificar artículos</h1>

  <form action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo $articulo->getTitulo(); ?>' required>
    </div>

    <div class="mb-3">
      <label for="contenido" class="form-label">Contenido</label>
      <textarea class="form-control" id="contenido" name="contenido" rows="3" required><?php echo $articulo->getContenido(); ?></textarea>
    </div>

    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="hidden" name="imagen_actual" value="<?php echo $articulo->getImagen(); ?>">
      <input type="file" class="form-control" id="imagen" name="imagen" value>
      <img src="/blog-objetos/img/<?php echo $articulo->getImagen(); ?>" style='height: 100px'>
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" name="fecha" value='<?php echo $articulo->getFecha(); ?>' required>
    </div>

    <div class="mb-3">
      <label for="destacado" class="form-label">Destacado</label>
      <input type="checkbox" class="form-label" id="destacado" name="destacado" <?php echo $articulo->getDestacado() == 0 ? "" : "checked" ?>>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
  </form>

  <div class="container my-5">
    <a href="index.php" class="btn btn-primary">Volver al listado</a>
  </div>
</div>