<?php
    $productos=["ordenador"=>525, "impresora"=>110, "windows10" => "200"];
    $descripciones=["ordenador"=>"Un superodenador cuántico...", "impresora"=>"Un dolor de muelas como todas", "windows10"=>"Sistema Operativo Windows 10"];

    $nombre=$_GET["producto"];
    $precio=$productos[$nombre];
    $descripcion=$descripciones[$nombre];

    echo "<img src='img/$nombre.jpg' style='height: 300px;'>";
    echo "<h1>$nombre</h1>";
    echo "<p>$descripcion</p>";
    echo "<h2>$precio</h2>";

    echo "<h3><a href='Ejercicio_Tienda.php'>Volver al índice</a></h3>";



    ?>
