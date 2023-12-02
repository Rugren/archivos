<?php
    session_start();
    require_once "modelo/conexion.php";
    require_once "modelo/Articulo.php";
    require_once "modelo/RepositorioArticulos.php";
    

        // Para crearme un repositorio:
        $id = $_GET["id"];
        
        $repo = new RepositorioArticulos($conexion);
        
        $articulo = $repo->findById($id);

    // Hecho para que se vea el "Artículo" + el nombre del artículo en cada pestaña del navegador
    $titulo="Artículo: " . $articulo->getTitulo();
    include_once "templates/header.php";
    ?>

<main>
        
    <?php
    // Llamamos a la función "mostrar" de Articulo.php
    $articulo->mostrar();
    ?>
    </main>

    <?php
    include_once "templates/footer.php"; 
    ?>

<?php
/* Así antes:
< ?php
    session_start();

    // hacer que se vea el "Artículo" + el nombre del artículo en cada pestaña del navegador
    $titulo="Artículo: ";

    require_once "modelo/Articulo.php";
    require_once "modelo/RepositorioArticulos.php";
    require_once "templates/header.php";
    require_once "modelo/conexion.php";

    $id = $_GET["id"];

    // Para crearme un repositorio:
    $repo = new RepositorioArticulos($conexion);

    $articulo = $repo->findById($id);

    echo $articulo->mostrar();

    require_once "templates/footer.php";
*/
?>