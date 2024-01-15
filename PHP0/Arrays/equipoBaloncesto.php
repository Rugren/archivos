<?php

$alineacion = ["Chacho", "Navarro", "Gasol", "Rudy", "Garbajosa"];

echo "<table>";

for($b=0; $b<sizeof($alineacion); $b++){

    echo "Jugadores: $alineacion[$b]";
    echo "<br>";

    // Se pone una imagen asiganda a cada nombre igual escrito. Mismo nombre en el array que en la foto, están en la carpeta: C:\xampp\htdocs\archivos\PHP0\Arrays\imgJugBaloncesto 
    echo "
    <tr> 
    <td style='border: solid black 2px'> 
    Jugador: $alineacion[$b] 
        <img src='imgJugBaloncesto/". $alineacion[$b].".jpg' width=200px height= 250px>
    </td>
    </tr>";
}
echo "<br>"; // este da un salto de línea desde el último "Jugadores: Garbajosa" hasta el salto de línea a "Jugador: Chacho" que ya está en la tabla.

echo "</table>";

?>