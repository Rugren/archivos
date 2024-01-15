<?php

require_once("../conexiones/conexion1.php");

$consulta = "SELECT nombre, ciudad FROM clientes WHERE id = 2";

$resultado = $conexion -> query($consulta);
$fila = $resultado -> fetch_object();
$nombre = $fila-> nombre;
$ciudad = $fila -> $ciudad;

echo "El usuario con id = 2 se llama $nombre es de $ciudad";

//EJERCICIO 2

function clientesCartagena($conn){
    $consulta = "SELECT id, nombre FROM clientes WHERE ciudad = 'Cartagena';";

    $resultado = $conn -> query($consulta);

    while ($fila=$resultado -> fetch_object()){
        echo "<p> Id: " . $fila->id . ", Nombre " . $fila->nombre . "</p>";
    }
}

//EJERCICIO 3

function clientesCartagenaEmpiezaPorM($conn){
    $consulta = "SELECT id, nombre FROM clientes WHERE ciudad = 'Cartagena' AND nombre LIKE 'm%';";
    $resultado = $conn -> query($consulta);
    while ($fila = $resultado -> fetch_object()){
        echo "<p> Id: " . $fila->id . ", Nombre " . $fila->nombre . "</p>";
    }
} 



//EJERCICIO 4

function insercionDatos($conn,$nombre, $ciudad){
    $insercion = "INSERT INTO clientes(nombre,ciudad) VALUES ('$nombre', '$ciudad')";
    
    $conn -> query($insercion);
    
}

function idParametro($conn, $id){
    $eliminacion = "DELETE FROM clientes WHERE id = $id";

    $conn -> query($eliminacion);
}


clientesCartagena($conexion);
clientesCartagenaEmpiezaPorM($conexion);
insercionDatos($conexion, "Fran", "Murcia");
idParametro($conexion, 1);

