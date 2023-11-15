<form action="" method="post">

    Nombre<input type="text" name="nombre">
    Email<input type="email" name="email">
    Avatar<input type="text" name="avatar">
    Departamento<select name="departamento">
                <option value="Administración">Administracion</option>
                <option value="Producción">Produccion</option>
                <option value="Almacén">Almacen</option>
    </select>
    <input type="submit" value="Enviar" name="enviar">
</form>


<?php
require_once "conexion.php";

if (isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $avatar = $_POST["avatar"];
        $departamento = $_POST["departamento"];
        $sql = "INSERT INTO trabajadores (nombre, email, avatar, departamento) values ('$nombre','$email', '$avatar', '$departamento')";
        $conexion->query($sql);

        header("location: index.php?mensaje=registro añadido");
}


