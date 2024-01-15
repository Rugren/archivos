<?php


$usuario = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$baseDeDatos="mibasededatos";

$conexion2 = new mysqli("localhost", $usuario,$password,$baseDeDatos);

if($conexion2 -> connect_errno){
    die("Error de conexion" . $conexion2->connect_errno);
}
