<?php
require_once "crud/conexion.php";
$id = $_GET["id"];
$textoSQL = "SELECT * FROM PRODUCTOS WHERE id=$id";
$resultado = $conexion->query($textoSQL);
$producto = $resultado->fetch_object();

$titulo="Comentario del artículo 2 " . $producto->nombre;
// $activo="DetalleComentarios"; // No hace o haría nada. Esto no es necesario porque no hemos hecho un apartado como el de Inicio, CRUD, Ver carrito...
require_once "header.php";
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios y Valoraciones</title>
    <!-- Enlaces a tus archivos CSS y JavaScript (ponerlo, para que salgan estrellas)
    <link rel="stylesheet" href="styles.css"> -->
</head>
<body>

<h2>Agregar Comentario a: <?php echo $producto->nombre;?> </h2>

    <form action="detalleComentarioPublicado.php" method="post">
        <textarea name="comentario" placeholder="Escribe tu comentario"></textarea><br>
        <label>Valoración: </label>
        <select name="valoracion">
            <option value="1">1 estrella</option>
            <option value="2">2 estrellas</option>
            <option value="3">3 estrellas</option>
            <option value="4">4 estrellas</option>
            <option value="5">5 estrellas</option>
        </select><br>
        <input type="submit" value="Publicar comentario" href="detalle.php?id=<?php echo $id; ?>">
        <!-- Para que después de comentar nos mande al producto anterior -->
    </form>


    <!-- Comentado y descomentar cuando funcione
    <h2>Comentarios</h2>
    < ?php  poner el < y ? juntos cuando descomente
    // Aquí se mostrarían los comentarios utilizando PHP para obtenerlos de una base de datos, por ejemplo
    // Puedes usar bucles y consultas a una base de datos para mostrar los comentarios.
    // Ejemplo simple:
    $comentarios = obtenerComentarios(); // Función hipotética para obtener comentarios (*hacer que de aquí los coja de la base de datos)

    foreach ($comentarios as $comentario) {
        echo "<div class='comentario'>";
        echo "<p>{$comentario['texto']}</p>";
        echo "<p>Valoración: {$comentario['valoracion']} estrellas</p>";
        echo "</div>";
    }
    ?> -->




</body>
</html>
