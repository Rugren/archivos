<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido Aleatorio</title>
</head>
<body>

 <!-- la función rand de PHP para seleccionar de manera aleatoria dos equipos de un array
En este ejemplo, el array $equipos contiene los nombres de los equipos. 
Se utilizan las funciones rand y count para seleccionar aleatoriamente dos equipos del array. 
Además, se incluye una verificación para asegurarse de que los dos equipos seleccionados no sean iguales. 
La información se muestra en una página HTML simple.  -->


<?php
// Array con los nombres de los equipos
$equipos = ["Equipo A", "Equipo B", "Equipo C", "Equipo D", "Equipo E"];

// Seleccionar dos equipos de forma aleatoria
$equipo1 = $equipos[rand(0, count($equipos) - 1)];
$equipo2 = $equipos[rand(0, count($equipos) - 1)];

// Asegurarse de que los equipos seleccionados no sean iguales
while ($equipo1 === $equipo2) {
    $equipo2 = $equipos[rand(0, count($equipos) - 1)];
}

// Mostrar los equipos seleccionados
echo "<h2>Partido Aleatorio</h2>";
echo "<p>Equipo 1: $equipo1</p>";
echo "<p>Equipo 2: $equipo2</p>";
?>

</body>
</html>
