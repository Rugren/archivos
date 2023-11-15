<?php
    $titulo="Ver Carrito";
    $activo="vercarrito";
    require_once("header.php");
    require_once("crud/conexion.php");
?>

  <main>
  <div class="container">
    <?php
    if(empty($_SESSION["listaproductos"])){
        echo "El carrito está vacío";
    }else{
        $lista=unserialize($_SESSION["listaproductos"]);
        echo "<table class='table table-striped'>";
        echo "<tr> <th>Nombre</th> <th>Descripción</th> <th>Imagen</th> <th>Borrar producto</th> </tr>";
        foreach($lista as $id){

          // Leo de la base de datos el resto de campos del producto usando el id
          $textoSQL="SELECT * FROM PRODUCTOS WHERE id=$id";
          // Cuando pongo un SELECT o algo que llamamos a la base de datos hay que poner require_once("crud/conexion.php"); dentro de un <?php a principo del código. 

          $resultado=$conexion->query($textoSQL);
          $producto=$resultado->fetch_object();

          // Muestra los datos en el navegador
          echo "<tr><td>" . $producto->nombre . "</td>";
          echo "<td>" . substr($producto->descripcion, 0, 15) . "</td>";
          // echo "<td>" . substr($producto->precio, 0, 15) . "</td>"; // corregir esto para que salga también el precio si queremos añadírselo.
          echo "<td><img src='img/" . $producto->imagen . "' style='height: 100px'></td>";
          echo "<td><a href='borrarelemento.php?id=$id'>Quitar del carrito</a></td></tr>";
        }
        echo "</table>";

        // Esto puesto yo: (que mande a la página de finalizar compra; finalizar_compra.php )
        echo "<a href='finalizar_compra.php'>Finalizar Compra</p>";

        // Enlace a la página de borrar carrito
        echo "<a href='borrarcarrito.php'>Vaciar Carrito</p>";
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