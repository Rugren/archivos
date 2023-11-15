<?php
    $jugadores = ["Chacho" => "1", "Navarro" => "2", "Gasol" => "3", "Rudy" => "4", "Garbajosa" => "5"];
    $equipos = ["Chacho" => "Real Madrid", "Navarro" => "Barcelona", "Gasol" => "Lakers", "Rudy" => "Real Madrid B", "Garbajosa" => "UCAM Murcia"];

    $jugador=$_GET["nombre"];
    $numCamiseta=$jugadores[$jugador];
    $equipo=$equipos[$jugador];

    echo "<img src='img/$nombre.jpg' style='height: 300px;'>"; // el profesor puesto así: echo "<img src='img/$jugador.jpg' style='height: 300px;'>";
    echo "<h1>$jugador</h1>";
    echo "<h2>$numCamiseta</h2>";

    echo "<h6><a href='club.php?club=$equipo'>$equipo</a></h6>";
    // antes estaba así (después de club.php'):  echo "<h6><a href='club.php'club=$equipo'>$equipo</a></h6>";

?>