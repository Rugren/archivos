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
    <?php
    require_once("conexion.php");
    ?>
  <link rel="stylesheet" type="text/css" href="style/style.css" />

    </head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <table></table>
    <?php
    echo "<table class='table table-dark table-striped'>";
    echo "<tr>";
    echo "<th>id</th><th>Name</th><th>Email</th><th>Photo</th><th>Departament</th><th>Modificar</th><th>Eliminar</th></tr>";
    $sql="SELECT * FROM employees";
    $result = $conexion->query($sql);

    while($row = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row -> id . "</td>";
        echo "<td>" . $row -> name . "</td>";
        echo "<td>" . $row -> email . "</td>";
        echo "<td>" . $row -> photo . "</td>";
        echo "<td>" . $row -> departament . "</td>";
        $id = $row -> id;
        $departament = $row -> departament;
        echo "<td><a href='update.php?id=$id&departament=$departament'>Update</a></td>";
        echo "<td><a href='delete.php?id=$id'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<br>";

    echo "<button type='button' class='btn btn-primary'><a href='insertar.php'>Insertar Registro</a></button>";

    
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
