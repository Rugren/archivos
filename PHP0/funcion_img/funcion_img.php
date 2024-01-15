<?php
    function ponImagen($urlImagen, $ancho){
        $ancho=(substr($ancho,-2)!="px") ? $ancho . "px" : $ancho;
        echo "<img src='$urlImagen' style='width:$ancho'>";
    }

    function ponImagenUrl($urlImagen, $ancho, $url){
        $ancho=(substr($ancho,-2)!="px") ? $ancho . "px" : $ancho;
        echo "<a href='$url'>";
        echo "<img src='$urlImagen' style='width:$ancho'>";
        echo "</a>";
    }
    function ponTabla($array1, $array2){
        echo "<table>";
        for($i=0; $i<sizeof($array1); $i++){
            $f1=$array1[$i];
            $f2=$array2[$i];
            echo "<tr><td style='border: dotted black 2px'>$f1</td>";
            echo "<tr><td style='border: dotted black 2px'>$f2</td>";
        }
        echo "</table>";
    }

    ponImagenUrl("img/flor1.jpg", 100, "img/flor1.jpg");
    ponImagen("img/flor2.jpg", 100, "img/flor2.jpg");
    ponImagen("img/flor3.jpg", 100, "img/flor3.jpg");

    ponImagenUrl("img/periodico1.jpg", 100, "https://www.elmundo.es/");
    ponImagenUrl("img/periodico2.jpg", 100, "https://www.marca.com/");
    ponImagenUrl("img/periodico3.jpg", 100, "https://www.lavanguardia.com/"); // el target="blank" es para abrir en otra pestaña, ver cómo ponerlo

    $nombres=["Persona", "Gonzalo", "Breyner", "Daniel", "Rodolfo"];
    $sueldos=["Sueldo", 3500, 2900, 5000, 6000];
    ponTabla($nombres, $sueldos);


