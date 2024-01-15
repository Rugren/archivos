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

</head>

<body>
<?php


$tipos = ["grano", "soluble", "capuchino", "infusiones", "sin-vaso"];


$variedades = [
    $tipos[0] => ["corto", "ristreto", "largo expresso"],
    $tipos[1] => ["soluble corto", "soluble largo",  "Cortado soluble"],
    $tipos[2] => ["cafe vainilla", "cortado vainilla", "vainilla con leche"],
    $tipos[3] => ["chocolate", "chocolate con leche", "Chocolate blanco"],
    $tipos[4] => ["cortado sin vaso", "largo sin vaso", "vainilla sin vaso"]
];

$nombre = $_GET["tipo"];

if (isset($variedades[$nombre])) {
    echo "<div class='row'>";
        foreach ($variedades[$nombre] as $opcion) {
            echo "<div class='col-md-4'>";
            echo "<a href='cafe3.php?opcion=$opcion' class='text-white text-decoration-none'>";
            echo "<div class='card bg-dark text-white'>";
            echo "<img src='img/subtipos/$opcion.png' class='card-img' alt='$opcion'>";
            echo "<div class='card-img-overlay d-flex flex-column justify-content-center'>";
            echo "<h5 class='card-title text-center'>$opcion</h5>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
    }
    echo "</div>";
} else {
    echo "error";
}
?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>