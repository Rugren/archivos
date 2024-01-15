<?php

for ($n=1; $n<11; $n++) {
    echo "7 x $n = " . $n*7;
    echo "<br>";
}

echo "<table borde='2' style='border: dotted 2 px black;>";
for($n=1; $n<11; $n++){
    echo "<tr>";
    echo "<td>7</td>";
    echo "<td>x</td>";
    echo "<td>$n</td>";
    echo "<td> . $n*7 </td>";
    echo "<tr>";
}
echo "</table>";




