<!doctype html>
<html lang="en">

<head>
  <title>Zapatillas</title>
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
    <h1 class='text-center'>Zapatillas Clásicas y retro</h1>
    <p class='text-center'>Las zapatillas más feas que con el tiempo han adquirido un encanto innegable</p>
  </header>
  <main>
    <div class='row1'>
        <?php
        $img = ["zapatilla1.png","zapatilla2.png","zapatilla3.png"];
        $nombres = ["Air Jordan", "Puma Azteca", "Adidas 1"];
        $precio = [125,200,350];
        $url = ["https://nike.com","https://puma.com", "https://adidas.com"];
        echo "<div class='col1'>";
        for($i = 0; $i < sizeof($img); $i++){
            echo "<div class='col text-center'>";
            echo "<img class='img-fluid' src='img/$img[$i]'>";
            echo "<h2 class='text-center'>$nombres[$i]</h2>";
            echo "<h3 class='text-center'>$precio[$i]Є</h3>";
            echo "<p class='text-center'><a href='$url[$i]'>Comprar</a></p></div>";
        }
        echo "</div>";

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