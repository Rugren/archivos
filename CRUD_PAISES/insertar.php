<?php
    require_once "conexion.php";
?>

<form action="" method="POST">
    <!-- No ponemos el id porque se autoincrementa -->
    Pais<input type="text" name="nombre">
    Código<input type="text" name="codigo">
    Continente<input type="text" name="continente">

    <input type="submit" name="enviar" value="enviar">
</form>

<?php

    echo "<a href='index.php'> Volver atrás</a>";
/* require_once "conexion.php"; */
    if(isset($_POST["enviar"])){
        $pais=$_POST["nombre"];
        $codigo=$_POST["codigo"];
        $continente=$_POST["continente"];
        $sql="INSERT INTO paises(nombre, codigo, continente) values ('$pais', '$codigo', '$continente')";

        $conexion->query($sql);

        echo "Se ha insertado el nuevo registro";
    }