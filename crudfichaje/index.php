<?php
require_once "conexion.php";

$sql = "SELECT * from trabajadores";
$resultados = $conexion->query($sql);


echo "<a href='insertar.php'>Insertar empleado</a>";
echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>Nombre</th>";
echo "<th>Email</th>";
echo "<th>Avatar</th>";
echo "<th>Departamento</th>";
echo "<th>Modificar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
while ($fila = $resultados->fetch_object()){

    echo "<tr>";
    echo "<td>$fila->id</td>";
    echo "<td>$fila->nombre</td>";
    echo "<td>$fila->email</td>";
    echo "<td>" . '<img src='. $fila->avatar. ' style="width:50px">' ."</td>";
    echo "<td>$fila->departamento</td>";
    $id = $fila->id;
    $departamento = $fila->departamento;
    echo "<td><a href='modificar.php?id=$id&departamento=$departamento'>Modificar</a></td>";
    echo "<td><a href='eliminar.php?id=$id'>Eliminar</a></td>";
    echo "</tr>";

}

echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table, th, tr, td {
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 1vw;
    }
    th {
        background-color: lightblue;
    }
        </style>
</head>
<body>
    
</body>
</html>