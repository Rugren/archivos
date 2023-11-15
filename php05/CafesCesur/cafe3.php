<?php
    $azucares=["azucarCon", "azucarSin"];
    $imagen=["azucarCon.jpg", "azucarSin.jpg"];

    foreach($azucares as $siAzucarONo){
        echo "<div>";
        echo "<a href='cafe4.php?tipo=$siAzucarONo'>";
        echo "<img src='img/$siAzucarONo.jpg' style='width: 200px; height:150px;'> <p>$siAzucarONo</p>"; // img/ para la carpeta
        echo "</a>";
        echo "</div>";
    }
