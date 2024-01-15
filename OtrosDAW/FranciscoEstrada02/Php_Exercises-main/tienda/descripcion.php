<?php

$tiendaTitulo = "Descripcion";
include("templates/header.php");
require_once("CRUD/conexion.php");
?>
<main class="bg-dark text-white">
    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM productos WHERE id = $id";
        $result = $conexion->query($sql);
        $row = $result->fetch_object();
        $id = $row->id;
        $nombre = $row->nombre;
        $descripcion = $row->descripcion;
        $precio = $row->precio;
        $img = $row->img;

    ?>
        <div class="center-content">
            <div class="product-container text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center container-img">
                            <img src="img/<?php echo $img ?>" alt="Product Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h2><?php echo $nombre ?></h2>
                            <div class="stars text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>5.0</p>
                            <p><?php echo $descripcion ?></p>

                            <label>Cantidad:</label>
                            <form id="formulario" name="formulario" method="post" action="carrito.php">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="number" name="cantidad" id="cantidad" class="form-control" value="1">
                                <h2>€<?php echo $precio ?></h2>
                                <input type="submit" name="añadirCarrito" value="Agregar al carrito" class="btn btn-primary ">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <br>
        <br>

        <div class="container mt-5">
            <h2>Reseñas</h2>


            <form method="post" action="logicareviews.php">
                <div class="form-group">
                    <input type="hidden" value="<?php echo $id ?>" name="producto_id">
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary mt-3 mb-5 " value="Agregar Reseña">
            </form>

            



            <div class="card-deck">
                <?php
                $sql = "SELECT reviews.*, users.nombre AS nombre_usuario
                FROM reviews
                JOIN users ON reviews.usuario_id = users.id
                WHERE reviews.producto_id = $id;";
                $result = $conexion->query($sql);

                $reviewsArray = array();

                while ($row = $result->fetch_object()) {
                    $reviewsArray[] = $row;
                }
                
                foreach ($reviewsArray as $review) {
                ?>
                    <div class="card mb-5 ">
                        <div class="row no-gutters bg-dark">
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <img src="img/avatar.png" class="card-img w-50 h-auto" alt="Imagen de perfil">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $review->nombre_usuario ?></h5>
                                    <p class="card-text"><?php echo $review->review ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>






        </div>
    <?php
    }
    ?>

</main>
<?php
include("templates/footer.php");
?>