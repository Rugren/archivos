<?php
    // include "conexion.php"; (esto el profesor no lo puso) 
    require_once "conexion.php";

/* Así yo:
    if (isset($_GET['id'])) {            
        $id=$_GET['id'];        
        $consultaSQL = "DELETE FROM equipos WHERE id = $id";        
        $consulta = $conexion->query($consultaSQL);                        
    }
    header("Status: 301 Moved Permanently");
    header("Location: index.php");
    exit;
*/ 

// Así el profesor:
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $consulta="DELETE FROM equipos WHERE id=$id";
        $conexion->query($consulta);

        header("location:index.php");
    }
?>