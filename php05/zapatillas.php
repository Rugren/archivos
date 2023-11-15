
<!-- PARA QUE SALGA TODO ESTO HAY QUE PONER: !bs5-$ y  -->

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
  <header>
    <h1 class='text-center'>Zapatillas clásicas y retro</h1>
    <p class='text-center'> Las zapatillas más feas que con el tiempo han adquirido un encanto innegable.</p>
  </header>
  <main>
    <div class='row'>
        <?php
            $img=["z1.jpg", "z2.jpg", "z3.jpg", "z4.jpg"];
            $nombre=["Air Jordan", "Puma Azteca", "Adidas 1", "NB star"];
            $precio=[200, 230, 240, 150];
            $url=["https://www.nike.com/", "https://eu.puma.com/es/es/home", "https://www.adidas.es/", "https://stockx.com/es-es/new-balance-fresh-foam-bb-all-star-2023"];
            // echo "<div class='col text center'></div>"; // esta línea es por si queremos centrar las imágenes

            for($i=0; $i<sizeof($img); $i++){
                echo "<div class='col'>";
                echo "<img class='img-fluid' src='$img[$i]' style='width: 200px; height:150px;'>";
                echo "<h2 class='text-center'>$nombre[$i]</h2>";

                echo "<h3 class='text-center'>$precio[$i] € </h3>";
                // echo "<h3 class='text-center'>$url[$i]</h3>";
                // echo "<p><a href='$url[$i]'>Comprar</a></p>";
                echo "<p class='text-center'><a href='$url[$i]'>Comprar</a></p></div>";
            }
            
            ?>
            
            </div>

            <!-- todo esto está hecho en HTML, borrado porque está arriba en PHP
        <div class='col'>
            <img clas= 'img fluid' src='zapatilla1.jpg' width="450" height="450">
            <h2 class='text-center'>Air Jordan</h2>
            <h3>200€</h3>
            <p><a href='https://www.nike.com/es/t/air-jordan-1-mid-zapatillas-5W9lRJ'>Comprar</a></p>
        </div>

        <div class='col'>
            <img clas= 'img fluid' src='zapatilla1.jpg' width="450" height="450">
            <h2 class='text-center'>Air Jordan</h2>
            <h3>200€</h3>
            <p><a href='https://www.nike.com/es/t/air-jordan-1-mid-zapatillas-5W9lRJ'>Comprar</a></p>
        </div>

        <div class='col'>
            <img clas= 'img fluid' src='zapatilla1.jpg' width="450" height="450">
            <h2 class='text-center'>Air Jordan</h2>
            <h3>200€</h3>
            <p><a href='https://www.nike.com/es/t/air-jordan-1-mid-zapatillas-5W9lRJ'>Comprar</a></p>
        </div>
    </div>
-->

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