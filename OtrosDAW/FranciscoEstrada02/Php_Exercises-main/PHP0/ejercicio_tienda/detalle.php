<?php

$productos = ["ordenador" => 525, "impresora" =>110, "windows10" =>210];

$descripciones = ["ordenador" => "Un super ordenador cuantico de cojones", "impresora" => "Impresora de cojones", "windows10" => "Mejor que todos los otros SO, una fucking bestia"];





$nombre = $_GET["producto"];
$precio = $productos[$nombre];
$descripcion = $descripciones[$nombre];


echo "<img src='img/$nombre.jpg' style='height: 300px;'>";
echo "<h1>Nombre: $nombre</h1>";
echo "<p>Descripcion: $descripcion</p>";
echo "<h2>Precio: $precio</h2>";

echo "<h3> <a href='tienda.php'>Volver al indice</a></h3>";