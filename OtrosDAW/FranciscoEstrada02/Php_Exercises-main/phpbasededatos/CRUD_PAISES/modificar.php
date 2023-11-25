<?php
require_once("conexion/conexion2.php");
$id = $_GET["id"];

$sql = "SELECT * FROM paises WHERE id = $id";
$resultado = $conexion2 ->query($sql);

$fila = $resultado -> fetch_object();
$nombre = $fila -> nombre;
$codigoPais = $fila -> codigoPais;
$continente = $fila -> continente;

?>

<form action="" method="post">
    <!--<input type="hidden" name="id" value="<?php //echo $_GET['id']?>"> -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nombre">Pais</label>
    <input type="text" name="nombre" value="<?php echo $nombre; ?>"> 
    <label for="codigoPais">Código</label>
    <input type="text" name="codigoPais" value="<?php echo $codigoPais; ?>"> 
    <label for="continente">Continente</label>
    <input type="text" name="continente" value="<?php echo $continente; ?>"> 
    
    <input type="submit" name="enviar" value="enviar"> 
</form>

<?php
    

    if(isset($_POST["enviar"])){
        $pais = $_POST["nombre"];
        $codigoPais = $_POST["codigoPais"];
        $continente = $_POST["continente"];

        $sql=" UPDATE paises SET nombre ='$pais',codigoPais='$codigoPais', continente='$continente' WHERE id=$id";

        $conexion2 -> query($sql);
        echo "Se ha modificafo el registro";
        header("location:index.php");
    }


?>