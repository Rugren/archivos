<?php

$alineacion = ['Chacho', 'Navarro', 'Gasol', 'Rudy', 'Garbajosa'];

echo "<table>";

for($i = 0; $i < sizeof($alineacion); $i++){

    echo "

    <tr>

    <td style= 'border: solid black 2px'>$alineacion[$i]</td>
    
    <td style= 'border: solid black 2px'>
        <img src='img/". $alineacion[$i].".jpg' >
    </td>

    </tr>" ;




}


echo "</table>";








?>