<?php
    require_once "../piscina2023.php";

    $consulta="SELECT * FROM piscina2023";

    $resultados=$conexion->query($consulta);
    echo "<a href='altas.php'>Insertar registro de altas </a>";

    echo "<table>";
    echo "<tr><th>Id</th><th>Nombre del cliente</th><th>Total pagos</th><th>Modificar</th><th>Eliminar</th></tr>";
    // no hace falta poner todos los campos, el ejercicio solo pide el total de pagos (pero yo puesto el nombre del cliente para identificar)
    while ($fila = $resultados->fetch_object()){
        echo "<tr>";
        echo "<th>" . $fila->id . "</th>";
        echo "<th>" . $fila->nombre_cliente . "</th>";
        echo "<th>" . $fila->total_pago . "</th>";
        $id = $fila->id;
        echo "<td><a href = 'modificar.php?id=$id'>Modificar</a></td>";
        echo "<td><a href = 'eliminar.php?id=$id'>Eliminar</a></td></tr>";
        /* probar lo de la alerta 
        1º echo "<td><a href = 'eliminar.php?id=$id' onclick="confirmarBorrado()">Eliminar</a></td></tr>";
        2º echo "<td><a href="#" onclick="confirmarBorrado(<?php echo $id; ?>)">Eliminar</a></td></tr>";
        */
    }
    echo "</table>";

?>

<!--  
    1º
    <script>
    function confirmarBorrado() {
        var respuesta = confirm("¿Estás seguro de que deseas borrar esto?");
        if (respuesta) {
            // Si el usuario hace clic en "Aceptar", redirige a tu script PHP de eliminación
            window.location.href = 'eliminar.php';
        } else {
            // Si el usuario hace clic en "Cancelar" o cierra la alerta, no hace nada
        }
    }
    </script>

    2º
    <script>
    function confirmarBorrado(id) {
        var respuesta = confirm("¿Estás seguro de que deseas borrar esto?");
        if (respuesta) {
            // Si el usuario hace clic en "Aceptar", redirige a tu script PHP de eliminación
            window.location.href = 'eliminar.php?id=$id' // así creo que no: 'eliminar.php?id=' + id;
        } else {
            // Si el usuario hace clic en "Cancelar" o cierra la alerta, no hace nada
        }
    }
    </script>
-->
