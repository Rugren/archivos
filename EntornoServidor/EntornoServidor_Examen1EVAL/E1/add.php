<?php
    require_once "conexion.php";

    if(isset($_POST["nombre"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $observaciones=$_POST["observaciones"];

        $consulta="INSERT INTO equipos (nombre, observaciones) VALUES ('$nombre', '$observaciones');";
        $conexion->query($consulta);

        header("Location: index.php");
    }
?>

<html>
    <head>
    <title>Crear equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body>
<form action="" method="post">
    <!-- (esto el profesor no lo puso) <input type="hidden" name="id" value="<?php echo $equipo->id ?>"> -->
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <!-- <input type="text" class="form-control" id="nombre" name="nombre" value="< ?php echo $equipo->nombre?>"> (el profesor no puso el php) -->
        <input type="text" class="form-control" id="nombre" name="nombre" value="">
    </div>
    <div class="mb-3">
        <label for="observaciones">Observaciones</label>
        <!-- En el textArea no se pone un Value -->
        <!-- <textarea class="form-control" id="observaciones" name="observaciones">< ?php echo $equipo->observaciones; ?></textarea> (el profesor no puso el php) -->
        <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<!-- El script de bootstrap:  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
    </html>
<?php 

    