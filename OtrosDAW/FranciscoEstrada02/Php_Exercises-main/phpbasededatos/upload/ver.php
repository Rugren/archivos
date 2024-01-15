<?php
    foreach (array_merge(glob("uploads/*.jpg"), glob("uploads/*.png")) as $nombreImagen) { 
        echo "<img src='$nombreImagen' style='height: 100px; margin: 10px; border:8px solid grey;'>";
    }
?>