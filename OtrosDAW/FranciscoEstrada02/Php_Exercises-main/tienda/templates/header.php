<!doctype html>
<html lang="en">

<head>
  <title><?php
   echo $tiendaTitulo; 
   ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="/tienda/index.php">
        <img src="/tienda/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Tienda
      </a>

      <div class="nav-bar-item">
        <ul class="navbar-nav flex-row ">
          <li class="nav-item active m-2">
            <a class="nav-link <?php if ($activo == "Home") echo 'active' ?>" href="/tienda/index.php">Home</span></a>
          </li>
          <li class="nav-item active m-2">
            <a class="nav-link  <?php if ($activo == "Carrito") echo 'active' ?>" href="/tienda/carrito.php">Carrito</span></a>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>