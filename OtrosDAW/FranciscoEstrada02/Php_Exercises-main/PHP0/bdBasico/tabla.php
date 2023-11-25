<?php
    require "conexion.php";        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
 
    <?php 
        $sql = "select * from clientes"; 
        $resultados = mysqli_query($conexion, $sql); 
        $num_filas = mysqli_num_rows($resultados); 
        ?> 

        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th style="text-align: left">Ciudad</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_assoc($resultados)){
                    echo "<tr>";
 
                    echo "<td>".$fila['id']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['ciudad']."</td>";
 
                    echo "</tr>";
                }
            ?>
 
        </table>

        <h2>Son un total de <?php echo $num_filas ?> registros</h2> 

        <!--
            EJERCICIOS
            Modifica el ejemplo para que solo aparezcan los clientes de Cartagena
            Modifica el ejemplo para que solo se muestren los clientes cuyo nombre empieza por P
            Modifica el ejemplo para que solo se muestren los clientes que se llamen María y sean de Cartagena
            -->
       
</body>
</html>