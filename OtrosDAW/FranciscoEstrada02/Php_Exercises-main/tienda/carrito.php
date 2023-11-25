<?php
$activo = "Carrito";
$tiendaTitulo = "Carrito";
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['nombre'])) {
    echo    'Acceso denegado';
    header("location: login/login.php");
} else {
    include("templates/header.php");
?>
    <main>
        <?php

        require_once("CRUD/conexion.php");
        if (isset($_POST['id']) && isset($_POST['cantidad'])) {
            $id = $_POST['id'];
            $cantidad = $_POST['cantidad'];
            $sql = "SELECT * FROM productos WHERE id = $id";
            $result = $conexion->query($sql);
            $fila = $result->fetch_object();


            if (!isset($_SESSION['carrito'])) {
                $_SESSION['carrito'] = [];
            }


            $_SESSION['carrito'][$id] = [
                'cantidad' => $cantidad,
                'id' => $fila->id,
                'nombre' => $fila->nombre,
                'descripcion' => $fila->descripcion,
                'precio' => $fila->precio,
                'img' => $fila->img
            ];

            $carrito = $_SESSION['carrito'];
        }
        ?>

        <section class="h-100 h-custom bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Carrito de compra</h1>
                                                <h6 class="mb-0 text-muted">
                                                    <?php
                                                    if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
                                                        echo count($_SESSION['carrito']) . " items";
                                                    } else {
                                                        echo "0 items";
                                                    }
                                                    ?>
                                                </h6>
                                            </div>
                                            <hr class="my-4 text-black">

                                            <?php
                                            $precio = 0;
                                            $precioInd = 0;
                                            if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {

                                                foreach ($_SESSION['carrito'] as $item) {
                                                    echo "<h5 class='text-black'>ID del Artículo: " . $item['id'] . "</h5>";
                                                    echo "<h2 class='text-black'>Nombre: " . $item['nombre'] . "</h2>";
                                                    if ($item['cantidad'] > 1) {
                                                        $precioInd = $item['cantidad'] * $item['precio'];
                                                    } else {
                                                        $precioInd = $item['precio'];
                                                    }
                                                    echo "<h4 class='text-black'><strong>Cantidad:</strong> " . $item['cantidad'] . "</h4>";
                                                    echo "<h4 class='text-black'><strong>Precio:</strong> €" . $precioInd . "</h4>";
                                                    echo "<p class='text-black'><strong>Descripción:</strong> " . $item['descripcion'] . "</p>";
                                                    // Aquí puedes mostrar la imagen si es necesario
                                                    echo "<img src='img/" . $item['img'] . "' alt='Imagen del producto' style='width:150px;
                                                    heigth: auto;'><br>";
                                                    echo "<a href='borrarproducto.php?id=$item[id]' class='btn btn-primary mt-5'>Borrar</a>";
                                                    echo "<hr class='my-4 text-black'>";
                                                    $precio += $precioInd;
                                                }
                                            } else {
                                                echo "El carrito está vacío.";
                                            }
                                            ?>


                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1 text-black ">Detalle</h3>
                                            <hr class="my-4 text-black">

                                            <div class="d-flex justify-content-between mb-4">
                                                <h5 class="text-uppercase text-black "><?php
                                                                                        if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
                                                                                            echo count($_SESSION['carrito']) . " items";
                                                                                        } else {
                                                                                            echo "0 items";
                                                                                        }
                                                                                        ?></h5>
                                                <h5 class='text-black'>€<?php echo $precio ?></h5>
                                            </div>




                                            <hr class="my-4 text-black">

                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase text-black ">Precio total</h5>
                                                <h5 class='text-black'>€ <?php echo $precio ?></h5>
                                            </div>

                                            <form method="post" class="d-flex">
                                                <input type="submit" name="cerrar_sesion" value="Cerrar Sesión" class="btn btn-primary mt-2 btn-block" style="display: block; width: 100%;">
                                            </form>
                                            <a href="borrarcarrito.php" class="btn btn-danger mt-3 d-block ">Vaciar carrito</a>

                                            <a href="borrarcarrito.php" class="btn btn-success mt-3 d-block ">Completar compra</a>

                                            <?php

                                            if (isset($_POST['cerrar_sesion'])) {

                                                session_destroy();
                                                header('location: login/login.php');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



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

<?php
}
?>