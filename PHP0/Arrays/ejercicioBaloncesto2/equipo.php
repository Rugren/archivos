<?php

$jugadores = ["Chacho" => "1", "Navarro" => "2", "Gasol" => "3", "Rudy" => "4", "Garbajosa" => "5"];
// $equipo = ["Chacho" => "Real Madrid", "Navarro" => "Barcelona", "Gasol" => "Lakers", "Rudy" => "Real Madrid B", "Garbajosa" => "UCAM Murcia"];

echo "<h1> Selección Española de Baloncesto </h1>";

foreach($jugadores as $nombre=>$numCamiseta){
    echo "<img src='img/$nombre.jpg' style='height: 300px;'>";
    echo "<h1>$nombre</h1>";
    echo "<h2>$jugadores</h2>";
    echo "<h3>$equipo</h3>";

    echo "<h3><a href='jugador.php'>Nombre del Jugador</a></h3>";
}


?>