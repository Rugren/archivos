<?php
// $titulo="Mi supertienda de caracoles";
$titulo="Mi supertienda de Libros";
$activo="Inicio";
require_once "header.php";
?>

  <main>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <h1>Tienda de caracoles serranos</h1>
                <h3>Criamos y vendemos los caracoles más fitness del Universo<h3> -->
                <h1>Tienda de Libros</h1>
                <h3>Tenemos y vendemos los Libros top más vendidos del momento<h3>
            </div>
            <p>Inclusive ofrecemos una cerveza chimay para el disfrute de tus lecturas.</p>
        </div>
        <div class="row">
            
                <?php
                require_once "crud/conexion.php";
                $consulta_sql="SELECT * FROM productos";
                $resultado=$conexion->query($consulta_sql);
                while($fila = $resultado->fetch_object()){
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $fila->imagen ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $fila->nombre; ?></h5>
                                <p class="card-text"><?php echo $fila->descripcion ?></p>
                                <p class="card-text text-danger"><?php echo round($fila->precio, 2) ?></p>
                                <a href="detalle.php?id=<?php echo $fila->id; ?>" class="btn btn-primary">Ver detalle</a>
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
    <p style="border-top: 2px dashed grey; margin-top: 120px"><h3>Nos encontramos en:</h3>Calle Tano, 27. 30420-Calasparra (Murcia)</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12536.463923975869!2d-1.7052336000000001!3d38.23041595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1698924865466!5m2!1ses!2ses" width="1000" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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