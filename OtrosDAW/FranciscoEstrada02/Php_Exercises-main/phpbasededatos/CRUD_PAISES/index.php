<?php

require_once("conexion/conexion2.php");

$sql="SELECT * FROM paises";


$resultado = $conexion2->query($sql);

echo "<a href='insertar.php'>Insertar registro</a>";


echo "<table>";
echo "<tr>";
echo "<th>id</th><th>Pais</th><th>Código</th><th>Continente</th><th>Modificar</th><th>Eliminar</th></tr>";

while($fila = $resultado->fetch_object()){
    echo "<tr>";
    echo "<td>" . $fila ->id ."</td>";
    echo "<td>" . $fila ->nombre ."</td>";
    echo "<td>" . $fila ->codigoPais ."</td>";
    echo "<td>" . $fila ->continente ."</td>";
    $id = $fila -> id;
    echo "<td><a href='modificar.php?id=$id'>Modificar</a></td>";
    echo "<td><a href='eliminar.php?id=$id'>Eliminar</a></td>";
    echo "</tr>";
}

echo "</table>";