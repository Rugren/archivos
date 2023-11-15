<?php
    $jugadores = ["Chacho" => "1", "Navarro" => "2", "Gasol" => "3", "Rudy" => "4", "Garbajosa" => "5"];
    $equipos = ["Chacho" => "Real Madrid", "Navarro" => "Barcelona", "Gasol" => "Lakers", "Rudy" => "Real Madrid B", "Garbajosa" => "UCAM Murcia"];
    $club=$_GET["club"];
    // comprobar de aquí hacia abajo que funcione, casi lo mismo que el archivo "index.php" de esta carpeta.
    echo "<h1> Selección Española de Baloncesto </h1>";
    echo "<div style='position:absolute; width: 700px; top-margin: 500px; left-padding:200px;'>";
    foreach($jugadores as $nombre=>$numCamiseta){
        if($club == $equipos[$nombre]){
            echo "<div style='width: 200px; float: left;'>";
            echo "<a href='jugador.php?nombre=$nombre'>";
            echo "<img src='img/$nombre.jpg' style='height: 100px;'>";
            echo "</a>";
            echo "<h2>$nombre</h2>";
            echo "<h3>$numCamiseta</h3>";
            echo "</div>";
        }
    }
    echo "</div>";

    // seguir anotando foto 2/10/23 a las 11:12
    // y anotar botón de volver, como en el ejercicio Tienda.
    // **copiado todo el 04/10, comprobar que funciona.