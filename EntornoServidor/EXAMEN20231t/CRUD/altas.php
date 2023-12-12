<?php
    require_once "../piscina2023.php";
?>

<form action="" method="POST">
    <!-- No ponemos el id porque se autoincrementa solo -->
    Nombre del cliente<input type="text" name="nombre_cliente">
    Entradas adultos<input type="number" name="entradas_adultos">
    Entradas Infantiles<input type="number" name="entradas_infantiles">
    Metodo de pago<input type="text" name="metodo_pago">
    Total Pago<input type="number" name="total_pago">

    <input type="submit" name="enviar" value="enviar">
</form>

<?php

    echo "<a href='index.php'> Volver atrás</a>";
    // require_once "../piscina2023.php";
    if(isset($_POST["enviar"])){
        $nombre_cliente=$_POST["nombre_cliente"];
        $entradas_adultos=$_POST["entradas_adultos"];
        $entradas_infantiles=$_POST["entradas_infantiles"];
        $metodo_pago=$_POST["entradas_infantiles"];
        $total_pago=$_POST["total_pago"];

        $sql="INSERT INTO piscina2023(nombre_cliente, entradas_adultos, entradas_infantiles, metodo_pago, total_pago, fecha_compra) 
        values ('$nombre_cliente', '$entradas_adultos', '$entradas_infantiles', '$entradas_infantiles',
        '$metodo_pago', '$total_pago')";

        $conexion->query($sql);

        echo "Se ha insertado el nuevo registro";
    }