<?php
    // ¡CUIDADO AHORA! estamos dentro de la carpeta crud(que salga atrás con ../ ) y tenemos que coger dentro de la carpeta modelo
    
    // require_once "../templates/header.php"; 
    // quitado header.php porque para el CRUD, el header lo hemos puesto similar abajo, ya que no coge el mismo en el CRUD, que en el inicio.
    require_once "../modelo/Articulo.php";
    require_once "../modelo/RepositorioArticulos.php";
    require_once "../modelo/conexion.php";

    /* Cogido el código del <head> y <header> y reemplazadas las comillas dobles por comillas simples para que lo coja en .php.
    el primer echo es para que coja todo el códgido del <head> 
    el segundo para que coja el estilo de bootstrap
    el tercer echo es el <header> que hemos puesto en header.php del inicio, 
    pero con los href haciendo referencias a enlaces del CRUD y para ir a la web. */
    echo "
    <html lang='es'>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>El blog de Ruben (CRUD)</title>";
    /* Como no está dentro del header.php (que lo hemos creado distinto para el crud) 
    pues no podemos poner $titulo="El blog de Ruben (CRUD)"; */

    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    </head> ";
    
    /* Puestas las rutas absolutas /archivos/blog/index.php y /archivos/blog/crud/index.php
    Esto hecho en form_add.php y form_update.php de manera distinta, 
    ya que ahí hemos puesto el nombre de la página en cada uno */
    echo "
    <header class='d-flex justify-content-center'>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid' style='background-color: #13438b;'>
            <a class='navbar-brand' href='/archivos/blog/index.php'>Blog Rubén García</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                <div class='navbar-nav'>
                    <a class='nav-link' aria-current='page' href='/archivos/blog/index.php'>Inicio</a>
                    <a class='nav-link' href='/archivos/blog/crud/index.php'>CRUD</a>
                </div>
            </div>
        </div>
    </nav>
    </header> ";


    $repo=new RepositorioArticulos($conexion);

    $lista = $repo->findAll();


    /* Esto cogido de: C:\xampp\htdocs\archivos\TIENDA\crud 
    Solo que ahí estaba con dobles comillas (" ") y aquí así PHP no lo coge, lo coge bien con comillas simples (' '):
    echo "<p class="text-center"><a class="btn btn-primary" href="../index.php">Inicio de la Tienda</a></p>" */
    
    // Esto comentado porque está en la cabecera bien hechos los botones del header 
    // echo "<p class='text-center'><a class='btn btn-primary' href='../index.php'>Inicio del blog</a></p>";

    echo "<div class='container'>";

    echo "<p class='text-center'><a class='btn btn-primary' href='form_add.php'>Añadir artículo</a>";

    echo "<table class='table'>";
    // echo "<tr><th>Id</th><th>Título</th><th>Acciones</th></tr>"; aquí solo pusimos Acciones(que despues hemos puesto lo de Destacado, Modificar y borrar)
    echo "<tr><th>Id</th><th>Título</th><th>Destacado</th><th>Modificar</th><th>Borrar</th></tr>";

    foreach($lista as $articulo){
        echo "<tr><td>$articulo->id</td>";
        // echo "<td>$articulo->contenido</td>";
        echo "<td>$articulo->titulo</td>";
        echo "<td>".($articulo->destacado == 0 ? "No" : "Si")."</td>";
        echo "<td><a href='form_update.php?id=$articulo->id'>Modificar</a></td>";
        echo "<td><a href='delete.php?id=$articulo->id'>Borrar</a></td></tr>";
    }

    echo "<table></div>";

    require_once "../templates/footer.php";
    // el footer aquí manda al index.php del CRUD, dentro del inicio del blog cogerá el index.php del inicio del blog principal.

