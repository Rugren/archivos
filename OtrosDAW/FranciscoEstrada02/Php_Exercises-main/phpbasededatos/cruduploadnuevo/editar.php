<?php
    include "conexion.php";    

    //Cuando mostramos la página con el formulario y los datos del alumno
    if (!isset($_GET['id'])) { //Si no nos pasan el id del alumno        
        echo "El alumno no existe";        
    }else{
        $id = $_GET['id'];
        $consultaSQL = "SELECT * FROM alumnosimg WHERE id =" . $id;    
        $sentencia = $conexion->query($consultaSQL);            
        $alumno = $sentencia->fetch_object();    
        if ($alumno) {            
            $nombre = $alumno->nombre;
            $apellido = $alumno->apellido;
            $email = $alumno->email;
            $edad = $alumno->edad;            
            $imagen = $alumno->imagen;            
        }else{            
            echo 'No se ha encontrado el alumno';
        }
        
    }
    
    //Cuando nos envían los datos del alumno desde el formulario y tenemos que actualizarlo
    if (isset($_POST['submit'])) {    
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];

        //Aquí el tratamiento de la imagen es un poco más complicado. 
        //Si no pasan nombre de fichero, mantenemos la que había. Si pasan nombre, subimos el nuevo fichero        
        if(isset($_FILES['imagen']['name']) && $_FILES['imagen']['name']!=""){  //Si nos pasan un nuevo fichero
          $imagen = date("Y-m-d - H-i-s")."-".$_FILES['imagen']['name'];             
          $file_loc = $_FILES['imagen']['tmp_name'];
          move_uploaded_file($file_loc,"uploads/".$imagen); 
          $consultaSQL = "UPDATE alumnosimg SET  nombre = '$nombre', apellido = '$apellido', email = '$email',  edad = $edad, ";
          $consultaSQL .= "imagen = '$imagen', updated_at = NOW() WHERE id = $id";  
        }else{
          //NO nos han pasado fichero, no tenemos que modificarlo, en la consulta no añadimos imagen
          $consultaSQL = "UPDATE alumnosimg SET  nombre = '$nombre', apellido = '$apellido', email = '$email',  edad = $edad, ";
          $consultaSQL .= "updated_at = NOW() WHERE id = $id";
        }        
        $consulta = $conexion->query($consultaSQL);        
        header("Status: 301 Moved Permanently");
        header("Location: index.php");
        exit;
    }    
?>

<?php require "templates/header.php"; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mt-4">Editando el alumno <?= escapar($nombre) . ' ' . escapar($apellido)  ?></h2>
        <hr>
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= escapar($nombre) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="<?= escapar($apellido) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= escapar($email) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" name="edad" id="edad" value="<?= escapar($edad) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
          </div>
          <?php
            //Si tiene imagen la mostramos
            if($imagen!=""){
              echo "<br><img src='uploads/$imagen' style='width: 100px'><br>";
            }
          ?>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php require "templates/footer.php"; ?>