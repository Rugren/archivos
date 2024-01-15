<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  
  <div class="container">
    
    <form action="" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" required>

      <label for="ciudad">Ciudad</label>
      <input type="text" name="ciudad" id="ciudad" required>
      
      <input type="submit" name="enviar" value="enviar" required>
    </form>

    <?php
      require_once "conexion.php";
      if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $ciudad = $_POST["ciudad"];        
        $resultado = $conexion->query("SELECT * FROM clientes WHERE nombre='$nombre'");    
        if($resultado -> fetch_object()){
            echo "El cliente ya existe";
        }else{     
            $sql = "INSERT INTO clientes (nombre, ciudad) values('$nombre', '$ciudad')";
            
            if($conexion->query($sql) === TRUE){
                echo "El cliente se ha insertado correctamente";        
            }else{
                echo "El cliente no se ha insertado correctamente";        
            }
        }
      }
      ?>
  </div>
</body>
</html>