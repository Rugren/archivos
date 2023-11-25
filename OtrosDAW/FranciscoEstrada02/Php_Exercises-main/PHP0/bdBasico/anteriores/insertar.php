<?php 
    require 'conexion.php';
    session_start();
 
    $pais = "Narnia";
    $codigo = "Na";    
     
    $sql = "insert into paises (pais, codigo) values('".$pais."', '".$codigo."')";
     
    if($conexion->query($sql) === TRUE){
        echo "El país se ha insertado correctamente";        
    }else{
        echo "El país no se ha insertado correctamente";        
    }
?>