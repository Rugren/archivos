<?php
    //Conectamos con el servidor 
    $conexion=new mysqli("localhost", "root", "");

    //Creamos la base de datos si no existe
    $consulta="CREATE DATABASE IF NOT EXISTS crudProfesores;";
    $conexion->query($consulta);

    //Seleccionamos la base de datos y creamos la tabla si no existe
    $conexion->select_db("crudProfesores");
    $consulta="CREATE TABLE IF NOT EXISTS profesores (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        modulo VARCHAR(50) NOT NULL,
        curso INT(3) NOT NULL,
        imagen VARCHAR(255) NOT NULL,

        /* Para añadir un nuevo campo, hay qye crear un alter table en la base de datos para poder añadir el campo de imagen. Que sería:
        ALTER TABLE profesores
        ADD imagen VARCHAR(255) ;

        También se puede añadir manualmente creando nuevos campos desde Agregar columna(s) desde http://localhost/phpmyadmin/index.php (abrir antes el MySQL desde el Xampp) y la base de datos que tengamos.  
        */

        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      );";
    $conexion->query($consulta);

    //Si la tabla está vacía, añadimos datos de ejemplo
    $consulta="SELECT nombre FROM profesores";
    $resultado=$conexion->query($consulta);    
    if($resultado->num_rows<1){
        
        $consulta="INSERT INTO profesores (nombre, apellido, modulo, curso, created_at, updated_at) 
        VALUES ('Rubén', 'García Ruiz', 'rubengr@profesores.com', 2, '2023-10-23 04:01:14', '2022-10-27 04:01:14');";
        /* Crear un alter table en la base de datos para poder añadir el campo de imagen*/

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