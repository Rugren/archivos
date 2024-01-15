<?php

$jugadores = ["Chacho" => "1", "Garbajosa" => "2", "Rudy" => "3", "Navarro" => "4", "Gasol" => "5"];

$equipos = ["Chacho" => "Real Madrid", "Garbajosa" => "Barcelona", "Rudy" => "Villareal", "Navarro" => "Real Murcia", "Gasol" => "Barcelona"];

$nombre = $_GET["jugador"];
$numCamiseta = $jugadores[$nombre];
$equipo = $equipos[$nombre];

echo "<img src='img/$nombre.jpg' style='height: 350px;'>";
echo "<h1>Nombre: $nombre</h1>";
echo "<h1>Equipo: $equipo</h1>";
