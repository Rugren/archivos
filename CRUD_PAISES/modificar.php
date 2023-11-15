<?php

    require_once "conexion.php";
    $id = $_GET["id"];
    $sql="SELECT * FROM paises where id = $id";
    $resultados = $conexion->query($sql);
    $fila = $resultados->fetch_object();
    $nombre = $fila->nombre;
    $codigo = $fila->codigo;
    $continente = $fila->continente;

?>

<form action="" method="POST">
    <input type="hidden" name="id" value = "<?php echo $id; ?>">

    Pais<input type="text" name="nombre" value = "<?php echo $nombre; ?>">
    Código<input type="text" name="codigo" value = "<?php echo $codigo; ?>">
    Continente<input type="text" name="continente" value = "<?php echo $continente; ?>">

    <input type="submit" name="enviar" value="enviar">
</form>

<?php

    echo "<a href='index.php'>Volver atrás</a>";

    if(isset($_POST["enviar"])){
        $pais=$_POST["nombre"];
        $codigo=$_POST["codigo"];
        $continente=$_POST["continente"];
        $sql="UPDATE paises SET nombre = '$pais', codigo = '$codigo', continente = '$continente' WHERE id=$id";

        $conexion->query($sql);

        echo "Se ha modificado el registro";
        header("location: index.php");
        
    }