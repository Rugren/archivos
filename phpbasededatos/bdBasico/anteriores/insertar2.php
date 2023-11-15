<?php 
    //Insertar con comprobación previa para no repetir valor
    require 'conexion.php';
    session_start();
 
    $pais = "Nunca Jamás";
    $codigo = "NJ";    

    $resultado = $conexion->query("SELECT * FROM paises WHERE pais='" . $pais . "'");

    if($resultado -> fetch_object()){
        echo "El país ya existe";
    }else{     
        $sql = "INSERT INTO paises (pais, codigo) values('".$pais."', '".$codigo."')";
        
        if($conexion->query($sql) === TRUE){
            echo "El país se ha insertado correctamente";        
        }else{
            echo "El país no se ha insertado correctamente";        
        }
    }
?>