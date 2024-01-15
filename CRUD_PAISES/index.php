<?php
    require_once "conexion.php";

    $sql="SELECT * FROM paises";

    $resultados=$conexion->query($sql);
    echo "<a href='insertar.php'>Insertar registro </a>";

    echo "<table>";
    echo "<tr><th>id</th><th>País</th><th>Código</th><th>Continente</th><th>Modificar</th><th>Eliminar</th></tr>";
    while ($fila = $resultados->fetch_object()){
        echo "<tr>";
        echo "<th>" . $fila->id . "</th>";
        echo "<th>" . $fila->nombre . "</th>";
        echo "<th>" . $fila->codigo . "</th>";
        echo "<th>" . $fila->continente . "</th>";
        $id = $fila->id;
        echo "<td><a href = 'modificar.php?id=$id'>Modificar</a></td>";
        echo "<td><a href = 'eliminar.php?id=$id'>Eliminar</td></tr>";
    }
    echo "</table>";
