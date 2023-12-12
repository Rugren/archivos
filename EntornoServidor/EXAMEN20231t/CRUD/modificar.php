<?php
require_once "../piscina2023.php";

if(isset($_POST["enviar"])){
    $id=$_POST["id"];
    $nombre_cliente=$_POST["nombre_cliente"];
    $entradas_adultos=$_POST["entradas_adultos"];
    $entradas_infantiles=$_POST["entradas_infantiles"];
    $metodo_pago=$_POST["metodo_pago"];
    $total_pago=$_POST["total_pago"];

    $consulta="UPDATE piscina2023 SET nombre_cliente='$nombre_cliente', 
    entradas_adultos='$entradas_adultos',
    entradas_infantiles='$entradas_infantiles',
    metodo_pago='$metodo_pago',
    total_pago='$total_pago' 
    WHERE id=$id";
    $conexion->query($consulta);

    header("location:index.php");

}else{
    $id=$_GET["id"];

    $consulta="SELECT * FROM piscina2023 WHERE id=$id";
    $resultado=$conexion->query($consulta);
    $piscina2023=$resultado->fetch_object();
}    
?>

<html>
<head>
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $piscina2023->id ?>">

    <div class="mb-3">
        <label for="nombre_cliente">Nombre del cliente</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="<?php echo $piscina2023->nombre_cliente; ?>">
    </div>

    <div class="mb-3">
        <label for="entradas_adultos">Entradas adultos</label>
        <input type="number" class="form-control" id="entradas_adultos" name="entradas_adultos" value="<?php echo $piscina2023->entradas_adultos; ?>">
    </div>

    <div class="mb-3">
        <label for="entradas_infantiles">Entradas Infantiles</label>
        <input type="number" class="form-control" id="entradas_infantiles" name="entradas_infantiles" value="<?php echo $piscina2023->entradas_infantiles; ?>">
    </div>

    <div class="mb-3">
        <label for="metodo_pago">Metodo de pago</label>
        <input type="text" class="form-control" id="metodo_pago" name="metodo_pago" value="<?php echo $piscina2023->metodo_pago; ?>">
    </div>

    <div class="mb-3">
        <label for="total_pago">Total Pago</label>
        <input type="number" class="form-control" id="total_pago" name="total_pago" value="<?php echo $piscina2023->total_pago; ?>">
    </div>

    <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>

</body>
</html>