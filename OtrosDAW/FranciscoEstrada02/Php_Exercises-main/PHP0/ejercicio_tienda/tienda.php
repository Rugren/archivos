<?php

$productos = ["ordenador" => 525, "impresora" =>110, "windows10" =>210];

$categorias = ["ordenador" => "hardware", "impresora" => "hardware", "windows10" => "software"];



echo "<h1>Mi tienda</h1>";

echo "<p><a href='categoria.php?cat=hardware'>Hardware</a> ";
echo "<a href='categoria.php?cat=software'>Software</a></p>";

foreach($productos as $nombre => $precio){
    $categoria = $categorias[$nombre];
    echo "<div style='width:200px; float:left'>";
    echo    "<img src='img/$nombre.jpg' style='height:100px'>";
    echo    "<h2>$nombre</h2>";
    echo    "<h2>$precio $</h2>";
    echo    "<a href='detalle.php?producto=$nombre'>Ver</a>";
    echo "<h6><a href='categoria.php?cat=$categoria'>$categoria</a></h6>";
    echo "</div>";
}