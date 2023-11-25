<head>
 <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<?php

$nombres = ["Maria", "Benito", "Juan", "Rosa", "Francisca"];

$apellidos= ["Sanchez Martinez", "Lopez Perez", "Garcia Jover", "Mora Tus", "Salta Martinez"];

echo "<table>";

for($i = 0; $i < sizeof($nombres); $i++){
    echo "<tr'>
        <td>$nombres[$i]</td>
        <td>$apellidos[$i]</td>
    </tr>";
}

echo "</table>";