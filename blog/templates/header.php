<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo $titulo?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>El blog de Ruben</title> 
    Cambiado a la siguiente línea, dónde pone: echo $titulo?, 
    ya que así aparecerá el título que le demos de nombre al artículo en la pestaña del navegador -->
    <title><?php echo $titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Se coge de https://getbootstrap.com/ donde pone Include via CDN (pero si le doy a html5 de bootstrap ya me lo coge) -->
</head>

<body>
    <!-- Borramos lo que hay después del body y dejamos el <header> -->
    <header> 
        <!-- El <header class="d-flex justify-content-center"> quitado de este header porque no coje todo, puesto en el header del CRUD (ver ahí como queda) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid" style="background-color: #8B4513;">
                <a class="navbar-brand" href="index.php">Blog Rubén García</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="/archivos/blog/index.php">Inicio</a>
                        <!-- Puesta ruta absoluta /archivos/blog/crud/index.php valen para todos los header 
                        Pero en el CRUD hemos hecho otro Crud distinto (con otro estilo de diseño también) -->
                        <a class="nav-link" href="/archivos/blog/crud/index.php">CRUD</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

