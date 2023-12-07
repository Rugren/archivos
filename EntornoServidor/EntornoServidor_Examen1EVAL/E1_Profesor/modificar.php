<?php
    require_once "conexion.php";

    if(isset($_POST["nombre"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $observaciones=$_POST["observaciones"];

        $consulta="UPDATE equipos SET nombre='$nombre', observaciones='$observaciones' WHERE id=$id";
        $conexion->query($consulta);

        header("location:index.php");

    }else{
        $id=$_GET["id"];

        $consulta="SELECT * FROM equipos WHERE id=$id";
        $resultado=$conexion->query($consulta);
        $equipo=$resultado->fetch_object();
    }    
?>
<html>
<head>
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $equipo->id ?>">
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipo->nombre; ?>">
    </div>
    <div class="mb-3">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control" id="observaciones" name="observaciones"><?php echo $equipo->observaciones; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>

<?php
