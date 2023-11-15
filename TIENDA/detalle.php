<?php
require_once "crud/conexion.php";
$id = $_GET["id"];
$textoSQL = "SELECT * FROM PRODUCTOS WHERE id=$id";
$resultado = $conexion->query($textoSQL);
$producto = $resultado->fetch_object();

$titulo="Detalle del artículo " . $producto->nombre;
$activo="Detalle";
require_once "header.php";
?>

    <main>
        <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if (empty($_GET["id"])) {
                    echo "No has pasado id de artículo";
                } else {
                    require_once "crud/conexion.php";
                    $id = $_GET["id"];
                    $textoSQL = "SELECT * FROM PRODUCTOS WHERE id=$id";
                    $resultado = $conexion->query($textoSQL);
                    $producto = $resultado->fetch_object();
                    ?>

                    <h1 class="text-center"><?php echo $producto->nombre; ?></h1>

            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="img/<?php echo $producto->imagen ?>">
            </div>
            <div class="col-8">
                <p><?php echo $producto->descripcion ?> </p>
            </div>
            </div>
            <div class="row">
            <div class="col">
                <h2 class="text-danger text-center"><?php echo round($producto->precio, 2) ?> </h2>
                <p class="text-center"><a class="btn btn-primary" href="carrito.php?id=<?php echo $id; ?>">Añadir al carrito</a></p>

                <!-- Estos apartados de Comenta y Comenta2 añadido yo: -->
                <p class="text-center"><a class="btn btn-primary" href="detalleComentarios.php?id=<?php echo $id; ?>" target="_blank">Comenta</a></p>
                <p class="text-center"><a class="btn btn-primary" href="detalleComentarios2.php?id=<?php echo $id; ?>" target="_blank">Comenta2</a></p>
            </div>
            </div>

            <?php
                }
                ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>