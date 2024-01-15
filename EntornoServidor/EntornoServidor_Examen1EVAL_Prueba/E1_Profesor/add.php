<?php
    require_once "conexion.php";

    if(isset($_POST["nombre"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $observaciones=$_POST["observaciones"];

        $consulta="INSERT INTO equipos (nombre, observaciones)  VALUES ('$nombre', '$observaciones');";
        $conexion->query($consulta);

        header("location:add.php");
    }    
?>
<html>
<head>
    <title>Añadir Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
    
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="">
    </div>
    <div class="mb-3">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>

<?php
