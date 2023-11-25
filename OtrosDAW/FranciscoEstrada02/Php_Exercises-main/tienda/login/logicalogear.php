<?php

require_once("../CRUD/conexion.php");

if (isset($_POST["username"]) && ($_POST['contraseña'])) {
    $username = $_POST["username"];
    $password = $_POST["contraseña"];


    $sql = "SELECT id, nombre, contraseña FROM users WHERE nombre = '$username'";
    $result = $conexion->query($sql);

    $row = $result->fetch_object();
    $id = $row->id;
    $nombre = $row->nombre;
    $hashPassword = $row->contraseña;

    if (($username == 'admin') && password_verify($password, $hashPassword)) {
        header('location: ../CRUD/admin.php');
    } elseif (password_verify($password, $hashPassword)) {
        session_start();
        $_SESSION['id'] = $row->id;
        $_SESSION['nombre'] = $row->nombre;
        header("location: ../index.php");
    } else {
        echo "<script>alert('Contraseña incorrecta');</script>";
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
