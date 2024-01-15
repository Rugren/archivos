<?php
require_once("../CRUD/conexion.php");

if (isset($_POST["contraseña"]) && isset($_POST["username"]) && isset($_POST["email"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["contraseña"];

    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO USERS (nombre, email, contraseña) VALUES
    ('$username', '$email', '$encryptedPassword')";
    $result = $conexion->query($sql);

    header("location: login.php");
    
}


?>