<?php
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['nombre'])) {
    echo    'Acceso denegado';
    header("location: login/login.php");
} else {
    require_once("CRUD/conexion.php");
    $activo = "Home";
    $tiendaTitulo = "Tienda prueba";
    include("templates/header.php");
?>
    <main class="bg-dark text-white">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="row">
                <?php
                $sql = "SELECT * FROM productos";
                $result = $conexion->query($sql);

                while ($row = $result->fetch_object()) {
                    $id = $row->id;
                    $nombre = $row->nombre;
                    $descripcion = $row->descripcion;
                    $precio = $row->precio;
                    $img = $row->img;
                ?>
                    <div class="col-md-4 mb-4 " style='width:412px;'>
                        <div class="card product-card">
                            <img class="card-img-top" src="img/<?php echo $img; ?>" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nombre; ?></h5>
                                <p class="card-text"><?php echo $descripcion; ?></p>
                                <h5 class="card-price">€<?php echo $precio; ?></h5>
                                <a href="descripcion.php?id=<?php echo $id; ?>" class="btn btn-primary">Ir a la página</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

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

<?php } ?>