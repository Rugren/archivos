<?php
require_once("conexion/conexion2.php");
?>

<form action="" method="post">

    <label for="nombre">Pais</label>
    <input type="text" name="nombre"> 
    <label for="codigoPais">Código</label>
    <input type="text" name="codigoPais"> 
    <label for="continente">Continente</label>
    <input type="text" name="continente"> 
    
    <input type="submit" name="enviar" value="enviar"> 
</form>

<?php
    

    if(isset($_POST["enviar"])){
        $pais = $_POST["nombre"];
        $codigoPais = $_POST["codigoPais"];
        $continente = $_POST["continente"];

        $sql="INSERT INTO paises(nombre,codigoPais,continente) VALUES ('$pais','$codigoPais','$continente')";

        $conexion2 -> query($sql);
    }

    echo "<a href='index.php'>volver</a>";

?>