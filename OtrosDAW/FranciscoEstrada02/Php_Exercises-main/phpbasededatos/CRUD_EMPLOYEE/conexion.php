<?php


$usuario = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$baseDeDatos="employee_crud";

$conexion = new mysqli("localhost", $usuario,$password,$baseDeDatos);

if($conexion -> connect_errno){
    die("Error de conexion" . $conexion->connect_errno);
}
