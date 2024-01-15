<?php
    //Conectamos con el servidor 
    $conexion=new mysqli("localhost", "root", "");

    //Creamos la base de datos si no existe
    $consulta="CREATE DATABASE IF NOT EXISTS crudantonio;";
    $conexion->query($consulta);

    //Seleccionamos la base de datos y creamos la tabla si no existe
    $conexion->select_db("crudantonio");
    $consulta="CREATE TABLE IF NOT EXISTS profesores (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        modulo VARCHAR(50) NOT NULL,
        curso INT(3),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      );";
    $conexion->query($consulta);

    //Si la tabla está vacía, añadimos datos de ejemplo
    $consulta="SELECT nombre FROM profesores";
    $resultado=$conexion->query($consulta);    
    if($resultado->num_rows<1){
        
        $consulta="INSERT INTO profesores (nombre, apellido, modulo, curso, created_at, updated_at) 
        VALUES ('Fracisco', 'Estrada Cuenca', 'Desarrollo entorno servidor', 2, '2022-10-27 04:01:14', '2022-10-27 04:01:14');";
        
        $conexion->query($consulta);

    };

    function escapar($html) {
        return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    }

    function csrf() {
        session_start();
      
        if (empty($_SESSION['csrf'])) {
          if (function_exists('random_bytes')) {
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
          } else if (function_exists('mcrypt_create_iv')) {
            $_SESSION['csrf'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
          } else {
            $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
          }
        }
    }
?>