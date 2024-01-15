<?php

    //Conexión a la BBDD de MySQL
    //---------------------------
    echo "<h2>Conecto a la base de datos llamada mibasededatos</h2>";
    $basededatos="mibasededatos";
    try {
        $dsn = "mysql:host=localhost;dbname=$basededatos";
        $usuariobd="root";
        $password="";
        $conexion = new PDO($dsn, $usuariobd, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    echo "<br>Conexión realizada";

    //CREACIÓN DE TABLAS
    //------------------
    echo "<h2>Si no existe, creo una tabla de clientes con los campos nombre y ciudad</h2>";    
    $statement = 'CREATE TABLE IF NOT EXISTS clientes( 
        id   INT AUTO_INCREMENT,
        nombre  VARCHAR(100) NOT NULL, 
        ciudad VARCHAR(50) NULL,         
        PRIMARY KEY(id)
    );';
    $conexion->exec($statement);

    echo "<h2>Si no existe, creo una tabla de pagos con los campos fecha e importe</h2>";
	$statement2 = 'CREATE TABLE IF NOT EXISTS pagos (        
        id INT AUTO_INCREMENT,
        id_cliente INT NOT NULL, 
        importe INT,
        fecha DATE,        
        PRIMARY KEY(id), 
        CONSTRAINT fk_author 
            FOREIGN KEY(id_cliente) 
            REFERENCES clientes(id)             
    )';
    $conexion->exec($statement2);
    
    //INSERCIÓN DE REGISTROS EN LA BBDD
    //---------------------------------

    echo "<h2>Vamos a insertar un cliente en la base de datos</h2>";
    // Preparación de la consulta dejando sin completar los valores de las interrogaciones
    $stmt = $conexion->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (?, ?)");
    // Le doy un valor a las interrogaciones a través de unas variables
    $nombre = "Peter";
    $ciudad = "Madrid";
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $ciudad);
    // Ejecuto la consulta para añadir el cliente
    $stmt->execute();    

    //MODIFICACIÓN DE REGISTROS DE LA BASE DE DATOS
    //---------------------------------------------
    echo "<h2>Vamos a modificar un cliente en la base de datos. Al cliente Peter vamos a decir que ahora vive en Murcia</h2>";
    // Preparación de la consulta dejando sin completar los valores de las interrogaciones
    $stmt = $conexion->prepare("UPDATE Clientes SET ciudad=? WHERE nombre=?");
    // Le doy un valor a las interrogaciones a través de unas variables
    $ciudad = "Murcia";
    $nombre = "Peter";
    $stmt->bindParam(1, $ciudad);
    $stmt->bindParam(2, $nombre);
    // Ejecuto la consulta para añadir el cliente
    $stmt->execute();

    //CONSULTAS A LA BASE DE DATOS.
    //-----------------------------

    // FETCH_ASSOC. En este caso los datos en PHP se recuperan con array asociativo en el que las claves son los nombres de los campos de la tabla
    $stmt = $conexion->prepare("SELECT * FROM Clientes WHERE ciudad=?");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ciudad = "Cartagena";
    $stmt->bindParam(1, $ciudad);
    // Ejecutamos
    $stmt->execute();
    // Mostramos los resultados
    while ($row = $stmt->fetch()){
        echo "Nombre: {$row["nombre"]} <br>";
        echo "Ciudad: {$row["ciudad"]} <br><br>";
    }

    // FETCH_OBJ. En PHP se recupera un objeto que tiene como propiedades los campos de la tabla de la BBDD
    $stmt = $conexion->prepare("SELECT * FROM Clientes");
    // Ejecutamos
    $stmt->execute();
    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "Nombre: " . $row->nombre . "<br>";
        echo "Ciudad: " . $row->ciudad . "<br>";
    }
