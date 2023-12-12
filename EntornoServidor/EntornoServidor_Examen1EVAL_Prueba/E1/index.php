<?php
    require_once "conexion.php";

    echo "<h1>Listado de equipos</h1>";
    $consulta="SELECT * FROM equipos";
    $resultado=$conexion->query($consulta);

    echo "<h2><a href='add.php'>Añadir un nuevo equipo</a></h2>";

    echo "<table>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Observaciones: </th><th>Modificaciones: </th><th>Borrar: </th></tr>";
    while ($fila = $resultado->fetch_object()) {
        echo "<tr><td>" . $fila->id . "</td>";
        echo "<td>" . $fila->nombre . "</td>";
        echo "<td>" . $fila->observaciones . "</td>";
        echo "<td><a href='modificar.php?id=" . $fila->id . "'>Modificar</a></td>";
        echo "<td><a href='borrar.php?id=" . $fila->id . "'>Borrar</a></td></tr>";        
    }
    echo "</table>";
    
