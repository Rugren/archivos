<?php
    include "conexion.php";
    include "../templates/header.php"; 
  

    csrf();
    if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
        die();
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="adminCreate.php"  class="btn btn-primary mt-4">Crear producto</a>
                <hr>
            </div>            
        </div>
        <div class="container">
            <div class="row">
                <form action="" method="post" class="form-inline">
                    <div class="form-group mr-3">
                    <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
                    </div>
                    <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
                    <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
                </form>                
            </div>
        </div>
        <?php            
            if (isset($_POST['nombre']) ) {
                $nombre=$_POST['nombre'];
                $consultaSQL = "SELECT * FROM productos WHERE nombre LIKE '%$nombre%'";
                $titulo = ($nombre!="") ? 'Lista de productos (' . $_POST['nombre'] . ')': 'Lista de productos';
            } else {
                $consultaSQL = "SELECT * FROM productos";
                $titulo = 'Lista de productos';
            }   
            
            echo "<h1 class='mt-3'>$titulo</h1>";
        ?>        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Img</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
        <?php                 
                 
            $consulta=$conexion->query($consultaSQL);    
            while($elemento=$consulta->fetch_object()){  
                $id=$elemento->id;
                $nombre=$elemento->nombre;
                $descripcion=$elemento->descripcion;
                $precio=$elemento->precio;
                $stock=$elemento->stock;
                $img=$elemento->img;
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$descripcion</td>";
                echo "<td>$precio</td>";
                echo "<td>$stock</td>";
                echo "<td><img src='../img/$img' style='width:100px; margin:auto;'></td>";
                //echo "<td><a href='borrar.php?id=$id ?'>🗑️Borrar</a>";
                echo "<td><form action='adminDelete.php?id=$id' method='post' onSubmit='return confirm(\"Seguro?\")'><input type='submit' value='borrar'></form>";
                echo "<a href='adminUpdate.php?id=$id'>✏️Editar</a></td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>
    </div>
<?php 
 include "../templates/footer.php"; 
?>
