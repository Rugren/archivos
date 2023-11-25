<?php

    echo "<h1>Ejercicio #6</h1>";

    $eurobasket =[2011 => "España", 2013 => "Francia", 2015 => "España", 2017 => "Esloveenia", 2022 => "España" ];

    foreach($eurobasket as $clave => $valor){
        echo "Año: <b>$clave</b>, Campeon:
        <span style='color:green'> $valor</span>";
        echo "<br>";
    }

    echo "<h1>Ejercicio #7</h1>";

    $alineacion = ['Chacho', 'Navarro', 'Gasol', 'Rudy', 'Garbajosa'];

    echo "<table>";
    
    for($i = 0; $i < 5; $i++){
        
        echo "
        
        <tr>
        <td style= 'border: solid black 2px'>
        <img src='img/". $alineacion[$i].".jpg' width=200px>
        </td>
        </tr>" ;
    }
    echo "</table>";   
        
        
    
    echo "<h1>Ejercicio #8</h1>";
    
    echo "<table>";
    
    for($i = 0; $i < sizeof($alineacion); $i++){
        
        echo "
        
        <tr>
        
        <td style= 'border: solid black 2px'>$alineacion[$i]</td>
        
        <td style= 'border: solid black 2px'>
        <img src='img/". $alineacion[$i].".jpg' width=200px>
        </td>
        </tr>" ;
    }
    echo "</table>";
    
    echo "<h1>Ejercicio #9</h1>";


    $frase = "Dábale arroz a la zorra el abad";
    
    echo "<h3>$frase</h3>";

    $array = explode(" ", $frase);

    for($j = 0; $j < sizeof($array); $j++){
        echo "<p>$array[$j]</p>";
    }


?>