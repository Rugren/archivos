<?php

$jugadores = ["Chacho" => "1", "Garbajosa" => "2", "Rudy" => "3", "Navarro" => "4", "Gasol" => "5"];

echo "<h1>Seleccion de baloncesto español</h1>";

echo "<body background='img/PistaBaloncesto.jpg' style='background-repeat: no-repeat; background-size: cover;'>" ;


foreach($jugadores as $nombre => $numCamiseta){
    echo "<div style='width: 200px; float: left'>";
    echo "<a href='jugador.php?jugador=$nombre'><img src='img/$nombre.jpg' style='height:100px'></a>";
    echo "<h3>$nombre</h3>";
    echo "</div>";
}

echo "</body>";


?>