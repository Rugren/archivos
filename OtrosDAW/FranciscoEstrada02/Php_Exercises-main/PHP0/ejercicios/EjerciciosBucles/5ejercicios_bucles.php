<?php

echo "<h1>Ejercicio #1</h1>";

$alumnos = ['Fran', 'Adrian', 'Ruben', 'Juaniko', 'Maikel'];

for($i = 0; $i < sizeof($alumnos); $i++){
    echo "Alumno: $alumnos[$i]";
    echo "<br>";
}

echo "<h1>Ejercicio #2</h1>";

$paises = ['España', 'Italia' ,'Alemania','Francia','Ecuador'];

$capitales = ['Madrid', 'Roma', 'Berlin', 'Paris', 'Quito'];


for($n = 0; $n < sizeof($paises); $n++){
    
    echo "Pais: <b>$paises[$n]</b>, Capital: 
    <label style= color:red>$capitales[$n]</label> ";
    echo ("<br>");
}

echo "<h1>Ejercicio #3</h1>";

$alumnos2 = ['Fran', 'Adrian', 'Ruben', 'Juaniko', 'Maikel'];


$notas2 = ['8', '6', '4', 'J7', '9'];

echo "<table style= 'border: solid black 2px'>";

for($j = 0; $j < sizeof($alumnos2); $j++){
    
    echo "
    
    <tr >
    <td style= 'border: solid black 2px'>$alumnos2[$j]</td>
    <td style= 'border: solid black 2px'>$notas2[$j]</td>
    </tr>" ;
    
}
echo "</table>";

echo "<h1>Ejercicio #4</h1>";

echo "<table style= 'border: solid black 2px'>";

for($j = 0; $j < sizeof($alumnos2); $j++){
    
    echo "
    
    <tr >
    <td style= 'border: solid black 2px'>$paises[$j]</td>
    <td style= 'border: solid black 2px'>$capitales[$j]</td>
    </tr>" ;
    
}
echo "</table>";

echo "<h1>Ejercicio #5</h1>";


$equipo1 =['Sevilla', 'Athletic', 'Villareal'];
$equipo2 =['Almeria', 'Getafe', 'Girona'];

$goles1 = ['5','2','1'];
$goles2 = ['1','2','2'];


echo "<table style= 'border: solid black 2px'>";

for($h = 0; $h < sizeof($equipo1); $h++){
    
    echo "
    <tr>

    <td style= 'border: solid black 2px'>$equipo1[$h]</td>
    
    <td style= 'border: solid black 2px'>$goles1[$h]</td>
    
    <td style= 'border: solid black 2px'>$equipo2[$h]</td>
    
    <td style= 'border: solid black 2px'>$goles2[$h]</td>

    </tr>" ;
    
}
echo "</table>";




?>