<?php
//Conectamos con el servidor 
$conexion = new mysqli("localhost", "root", "");

//Creamos la base de datos si no existe
$consulta = "CREATE DATABASE IF NOT EXISTS tienda;";
$conexion->query($consulta);

//Seleccionamos la base de datos y creamos la tabla si no existe
$conexion->select_db("tienda");

$consulta = "CREATE TABLE IF NOT EXISTS productos (
        id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        descripcion VARCHAR(30) NOT NULL,
        precio decimal(50) NOT NULL,
        stock INT(200),
        img VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      );";
$conexion->query($consulta);

$consulta = "CREATE TABLE IF NOT EXISTS users (
  id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NOMBRE VARCHAR(50) NOT NULL,
  CONTRASEÑA VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
$conexion->query($consulta);

$consulta = "CREATE TABLE IF NOT EXISTS reviews (
  id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  review VARCHAR(525) NOT NULL,
  producto_id INT(255) UNSIGNED,
  usuario_id INT(255) UNSIGNED,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (producto_id) REFERENCES productos(id),
  FOREIGN KEY (usuario_id) REFERENCES users(id)
);";
$conexion->query($consulta);



function escapar($html)
{
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function csrf()
{
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
