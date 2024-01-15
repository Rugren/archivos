<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />


</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <?php

require_once("conexion.php");

$id = $_GET["id"];
$departament = $_GET["departament"];

$sql ="SELECT * FROM employees WHERE id = $id";
$result = $conexion ->query($sql);


$row = $result -> fetch_object();
$name1 = $row -> name;
$email = $row -> email;
$photo = $row -> photo;
$departament = $row -> departament;

?>

<form action="" method="post">
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id;?>">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?php echo $name1;?>">
        <small id="emailHelp" class="form-text text-muted">Introduce a valid e-mail.</small>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="<?php echo $email;?>">
    </div>
    <div class="">
        <label for="photo">Photo</label>
        <input type="text" name="photo" value="<?php echo $photo;?>">
    </div>
    <div class="">
        <label for="departament">Departamento</label>
        <select name="departament" value="<?php echo $departament;?>">
            <option <?php if($departament === "Almacen") {echo "selected";}  ?> >Almacen</option>
            <option <?php if($departament === "Produccion") {echo "selected";}  ?>>Produccion</option>
            <option <?php if($departament === "Administracion") {echo "selected";}  ?>>Administracion</option>
        </select>
    </div>

    <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">
</form>


<?php
    

    if(isset($_POST["enviar"])){
        $name1 = $_POST["name"];
        $email = $_POST["email"];
        $photo = $_POST["photo"];
        $departament = $_POST["departament"];

        $sql="UPDATE employees SET name ='$name1',email='$email', photo='$photo', departament='$departament' WHERE id=$id";

        $conexion -> query($sql);
        echo "Se ha modificafo el registro";
        header("location:index.php");
    }


?>
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
