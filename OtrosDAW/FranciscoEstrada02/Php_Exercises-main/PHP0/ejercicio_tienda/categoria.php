<?php

$productos = ["ordenador" => 525, "impresora" =>110, "windows10" =>210];

$categorias = ["ordenador" => "hardware", "impresora" => "hardware", "windows10" => "software"];

$cat = $_GET["cat"];
echo "<h1>$cat</h1>";

foreach($productos as $nombre => $precio){
    $categoria = $categorias[$nombre];
    if($cat == $categoria){
        echo "<div style='width:200px; float:left'>";
        echo    "<img src='img/$nombre.jpg' style='height:100px'>";
        echo    "<h2>$nombre</h2>";
        echo    "<h2>$precio $</h2>";
        echo    "<a href='detalle.php?producto=$nombre'>Ver</a>";
        echo "<h6><a href='categoria.php?cat=$categoria'>$categoria</a></h6>";
        echo "</div>";
    }
}

echo "<h3> <a href='tienda.php'>Volver al indice</a></h3>";