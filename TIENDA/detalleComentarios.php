<?php
require_once "crud/conexion.php";
$id = $_GET["id"];
$textoSQL = "SELECT * FROM PRODUCTOS WHERE id=$id";
$resultado = $conexion->query($textoSQL);
$producto = $resultado->fetch_object();

$titulo="Comentario del artículo " . $producto->nombre;
// $activo="DetalleComentarios"; // No hace o haría nada. Esto no es necesario porque no hemos hecho un apartado como el de Inicio, CRUD, Ver carrito...
require_once "header.php";
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios y Valoraciones</title>
    <style>
        /* Agrega estilos para las estrellas */
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }

        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
        }
    </style>
</head>
<body>

    <h1>Producto: <?php echo $producto->nombre;?> </h1>

    <!-- Formulario para comentarios y valoraciones -->
    <form id="commentForm">
        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea>

        <label for="rating">Valoración:</label>
        <div class="rating">
            <span><input type="radio" name="rating" id="star5" value="5"></span>
            <span><input type="radio" name="rating" id="star4" value="4"></span>
            <span><input type="radio" name="rating" id="star3" value="3"></span>
            <span><input type="radio" name="rating" id="star2" value="2"></span>
            <span><input type="radio" name="rating" id="star1" value="1"></span>
        </div>

        <br>

        <input type="submit" value="Enviar comentario">
    </form>

    <!-- Lista de comentarios y valoraciones -->
    <div id="comments">
        <!-- Los comentarios y valoraciones se mostrarán aquí -->
    </div>

    <script>
        document.getElementById("commentForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Obtener datos del formulario
            var comment = document.getElementById("comment").value;
            var rating = document.querySelector('input[name="rating"]:checked').value;

            // Crear nuevo elemento de comentario
            var newComment = document.createElement("div");
            newComment.innerHTML = "<p><strong>Valoración: " + rating + " estrellas</strong></p><p>" + comment + "</p>";

            // Agregar comentario a la lista
            document.getElementById("comments").appendChild(newComment);

            // Limpiar el formulario
            document.getElementById("commentForm").reset();
        });
    </script>

</body>
</html>
