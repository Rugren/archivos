<?php
    $tipos=["cafe_grano", "cafe_soluble", "cafe_capuchino", "infusiones", "sinvaso"]; // llamar a grano como cafe_grano para que los coja abajo en $imagen en .jpg: cafe_grano.jpg 
    $imagen=["cafe_grano.jpg", "cafe_soluble.jpg", "cafe_capuchino.jpg", "infusiones.jpg", "sinvaso.jpg"];

    foreach($tipos as $tipo){
        echo "<div>";
        echo "<a href='cafe2.php?tipo=$tipo'>";
        echo "<img src='img/$tipo.jpg' style='width: 200px; height:150px;'> <p>$tipo</p>"; // img/ para la carpeta
        echo "</a>";
        echo "</div>";
    }
