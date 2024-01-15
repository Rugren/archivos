<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/estilos.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="bootstrap" crossorigin="anonymous">



</head>

<body>
    <div class='parent'>
        
        <?php

        $tipos = ["grano", "soluble", "capuchino", "infusiones", "sin-vaso"];

        echo "<div class ='title-coffe-cesur'><h1>Cafes de Cesur</h1></div>";

        foreach($tipos as $tipo){
            echo "<div class='$tipo'>";
            echo "<a href='cafe2.php?tipo=$tipo'>";
            echo "<img src='img/$tipo.png'>";
            echo "<span class='label'>$tipo</span></a></div>";
        }
        ?>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>