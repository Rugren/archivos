<?php
    // el inicio de sessión se pone siempre en la primera línea
    session_start();

    /* Esto de $titulo="XXX"; poner en cada página para que coja el nombre que le demos a cada página php, 
    que la coje del header.php */
    $titulo="Inicio del blog de Rubén";

    require_once "templates/header.php";
    require_once "modelo/Articulo.php";
    require_once "modelo/RepositorioArticulos.php";
    require_once "modelo/conexion.php";

?>

    <div class="text-blak d-flex flex-column align-items-center ">
        <h1>¡Bienvenido al Blog de Rubén!</h1>
        <h3>Aquí verás todo el contenido del blog de Rubén</h3>
    </div>

<main>

<?php

    // Utilizo la conexión que se crea en conexion.php para pasarla como parámetro al repo
    $rep = new RepositorioArticulos($conexion);

    $articulos = $rep->findAll();

    // Para hacer que si no hay un articulo creado, me cree uno
    // el bucle nos crea 5 artículos 
    if(empty($articulos) || sizeof($articulos)<5){
        $a = new Articulo();
        $a->setPropiedades("Gran titular", "Mejor contenido", "imagen.jpg");
        $rep->save($a);
    }

    // Hacemos un bucle para que se muestren todos los artículos
    foreach ($articulos as $a) {
        echo "<a href='detalle.php?id=" . $a->getId() . "'><h2>" . $a->mostrarMini() . "</h2></a>";

    }

?>
    <div>
        <h2 class="text-blak d-flex flex-column align-items-center ">¡¡¡Los mejores estadios de fútbol de España!!!</h2>
    </div>

<?php
    // Para mostrar carousel de imágenes 
    $rep->mostrarCarousel();
?>
    

    <div class="d-flex">
<?php
    foreach ($articulos as $a) {
            $a->mostrarCard();
        }
?>
    </div>

</main>

<?php
    require_once "templates/footer.php";
?>