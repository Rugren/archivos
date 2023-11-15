<?php

require_once "conexion.php";
$id = $_GET["id"];
$departamento = $_GET["departamento"];
$sql = "SELECT * FROM trabajadores where id=$id";
$resultados = $conexion->query($sql);
$fila = $resultados->fetch_object();
$nombre = $fila->nombre;
$email = $fila->email;
$avatar = $fila->avatar;
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Nombre<input type="text" name="nombre" value="<?php echo $nombre;?>">
    Email<input type="email" name="email" value="<?php echo $email;?>">
    Avatar<input type="text" name="avatar" value="<?php echo $avatar;?>">
    Departamento<select name="departamento">
                <option value="Administración" <?php if($departamento == "Administración") echo 'selected="selected"' ;?>>Administracion</option>
                <option value="Producción" <?php if($departamento == "Producción") echo 'selected="selected"' ;?>>Produccion</option>
                <option value="Almacén" <?php if($departamento == "Almacén") echo 'selected="selected"' ;?>>Almacen</option>
    </select>
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php

if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $avatar = $_POST["avatar"];
    $departamento = $_POST["departamento"];
    $sql = "UPDATE trabajadores set nombre='$nombre', email='$email', avatar='$avatar', departamento='$departamento' where id=$id";
    $conexion->query($sql);
    header("location: index.php?mensaje=empleado modificado");

}