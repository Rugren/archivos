
<!-- Crear un delete byId, que le pasemos la Id y la borre 
Añadido BORRAR con método deleteById($id) en RepositorioArticulos.php
-->

<?php
  require_once("../modelo/conexion.php");
  require_once("../modelo/Articulo.php");
  require_once("../modelo/RepositorioArticulos.php");

  $id = $_GET["id"];

  $repositorio = new RepositorioArticulos($conexion);
//   $repositorio->deleteById($id); puesta esta línea abajo con el if (Si no pongo el if, con esta línea vale para borrar)
  if ($repositorio->deleteById($id)) {
    // no salen al eliminar los echo de "Artículo eliminado..." o "Error al..." porque habría que pasarle un Alert que nos avise
    echo "Artículo eliminado correctamente.";
    } else {
    echo "Error al intentar eliminar el artículo.";
    }

  header("location: index.php");
  exit;


  /*
  $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id !== null && is_numeric($id)) {
        $repositorio = new RepositorioArticulos($conexion);

        if ($repositorio->deleteById($id)) {
            echo "Artículo eliminado correctamente.";
        } else {
            echo "Error al intentar eliminar el artículo.";
        }
    }
*/

/*
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id !== null && is_numeric($id)) {
        $repositorio = new RepositorioArticulos($conexion);
        $repositorio->deleteById($id);
    }
*/


?>
