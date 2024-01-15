<?php 
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
  <title><?php echo $titulo?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
  <header>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link <?php if($activo=="Inicio") echo 'active';?>" aria-current="page">Inicio</a></li>
            <li class="nav-item"><a href="crud/index.php" class="nav-link <?php if($activo=="CRUD") echo 'active';?>">CRUD</a></li>
            <li class="nav-item"><a href="vercarrito.php" class="nav-link <?php if($activo=="vercarrito") echo 'active';?>">Ver carrito</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        <a href='vercarrito.php'>
        <i class="bi bi-cart"></i>
        <?php
        echo "";
        if(isset($_SESSION["listaproductos"])){            
            $lista=unserialize($_SESSION["listaproductos"]);
            if(sizeof( $lista)> 0){
                echo "(" . sizeof($lista) . ")";
            }
            
        }       
        echo "</a>";
        ?>
        </header>
    </div>
  </header>