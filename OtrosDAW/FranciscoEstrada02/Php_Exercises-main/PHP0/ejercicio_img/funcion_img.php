<?php

function ponImg($urlImg, $ancho){

    $ancho = (substr($ancho, -3)!="px") ? $ancho . "px" : $ancho;
    echo "<img src='$urlImg' style='width:$ancho'>";
}
function ponImgUrl($urlImg, $ancho,$url){
    $ancho = (substr($ancho, -3)!="px") ? $ancho . "px" : $ancho;
    echo "<a href= '$url'>";
    echo "<img src='$urlImg' style='width:$ancho'>";
    echo "</a>";
}

function goToPeriodico($urlImg, $ancho, $url){
    $ancho = (substr($ancho, -3)!="px") ? $ancho . "px" : $ancho;
    echo "<a href= '$url'>";
    echo "<img src='$urlImg' style='width:$ancho'>";
    echo "</a>";
}

$nombres = ['Rugren','Adrian','Francisco','Manolo'];
$sueldo = [1000,1500,2000,5000];

function tableGenerator($array1, $array2){
    echo "<table>";
    for($i = 0; $i < sizeof($array1); $i++){     
        echo "
                <tr>
                    <td style= 'border: solid black 2px'>
                        $array1[$i]
                    </td>
                    <td style= 'border: solid black 2px'>
                        $array2[$i]
                    </td>
                
                </tr>";
    }
    echo "</table>";   
}

goToPeriodico("img/logo1.png", 100, "https://elpais.com/");
goToPeriodico("img/logo2.png", 100, "https://www.elmundo.es/");
goToPeriodico("img/logo3.png", 100, "https://www.lavanguardia.com/");


ponImgUrl("img/perro1.jpg", 100, "img/perro1.jpg");
ponImgUrl("img/perro2.jpg", 100, "img/perro2.jpg");
ponImgUrl("img/perro3.jpg", 100, "img/perro3.jpg");
ponImgUrl("img/perro4.jpg", 100, "img/perro4.jpg");
ponImgUrl("img/perro5.jpg", 100, "img/perro5.jpg");



tableGenerator($nombres,$sueldo);
?>