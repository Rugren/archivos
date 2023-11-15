<?php

$nombres=["María", "Benito", "Juan", "Rosa", "Francisca"];
$apellidos=["Sánchez Martínez", "López Pérez", "García Jover", "Mora Tus", "Salta
Martínez"];

// echo "<table>";
echo "<table style='border: solid 4px black'>";

for($i=0; $i<sizeof($nombres); $i++){
    echo "<tr><td style='border: dotted 2px red'> $nombres[$i]<td style= 'border: dashed 2px blue'>$apellidos[$i]</tr></td>"; // no coje el azul
    // echo "<tr><td style='border: dotted 2px red'> $nombres[$i]</tr></td> <tr><td style= 'border: dashed 2px blue'>$apellidos[$i]</tr></td>"; // otra manera de tabla
}

echo "</table>";
