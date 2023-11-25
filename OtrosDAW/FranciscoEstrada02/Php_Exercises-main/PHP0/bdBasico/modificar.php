<?php
    require_once "conexion.php";            
    
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $ciudad=$_POST["ciudad"];   
    $consulta="UPDATE clientes SET nombre='$nombre', ciudad='$ciudad' WHERE id=$id";
    echo $consulta;
    $conexion->query($consulta);

    //Si lo hiciera con Prepared Statements
    /*
    $consulta="UPDATE clientes SET nombre=?, ciudad=? WHERE id=?";
    $stmt = $conexion->prepare($consulta);    
    $stmt->bind_param("iss", $id, $nombre, $ciudad);
    $stmt->execute();
    */
    //Después de modificar, redirijo al listado
    header("location: insertar05.php");