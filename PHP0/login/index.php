<?php
    session_start();
    if(!isset($_SESSION["logged"])){
        echo "<h1>Debes introducir tu usuario y contraseña para ver la página</h1>";
        echo "<a href='login.php'>Ir al login</a>";
    }else{
        echo "<html><head><title>Superpágina</title>";
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
        echo "</head><body>";
        echo "<h1>Bienvenido " . $_SESSION["username"] . "</h1>";
        echo "<p>Esta es la página secreta a la que solo se puede acceder con la contraseña mágica solo accesible para los iniciados</p>";
        echo "<h2>Inicia2</h2>";
        echo "<p>Ya estás en la lista</p>";
        echo "<p><a href='cerrarsesion.php'>Cerrar sesión</a></p>";
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';
        echo "</body></html>";
    }
?>