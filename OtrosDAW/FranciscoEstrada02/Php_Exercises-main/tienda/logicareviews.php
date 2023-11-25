<?php
session_start();
require_once("CRUD/conexion.php");

if (isset($_POST["comentario"]) && ($_POST["producto_id"])) {
    $comentario = $_POST["comentario"];
    $producto_id = $_POST["producto_id"];

    $user_id = $_SESSION['id'];

    $sql = "INSERT INTO reviews (review, producto_id, usuario_id) VALUES
    ('$comentario','$producto_id','$user_id')";
    $result = $conexion->query($sql);

    header("location: descripcion.php?id=$producto_id");

}

