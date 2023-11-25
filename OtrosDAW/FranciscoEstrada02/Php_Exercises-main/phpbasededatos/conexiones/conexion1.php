<?php


$usuario ="root";
$password ="";
$baseDeDatos = "mibasededatos";

$conexion = new mysqli("localhost", $usuario,$password, $baseDeDatos);

if($conexion -> connect_errno){
    die("Error de conexion" . $conexion->connect_errno);
}
