<?php
    //CREAR LA CONEXIÓN. DEBEMOS CREAR PREVIAMENTE LA BBDD EN MYSQL
    $usuario="root";
    $password="";
    $basededatos="mibasededatos";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);    
    if ($conexion->connect_errno) {
        die("error de conexión: " . $conexion->connect_error);
    }
    
    //CREACIÓN DE TABLAS
    //------------------
    echo "<h2>Si no existe, creo una tabla de clientes con los campos nombre y ciudad</h2>";    
    $statement = 'CREATE TABLE IF NOT EXISTS clientes( 
        id   INT AUTO_INCREMENT,
        nombre  VARCHAR(100) NOT NULL, 
        ciudad VARCHAR(50) NULL,         
        PRIMARY KEY(id)
    );';
    $conexion->query($statement);

    //INSERCIÓN DE REGISTROS SENCILLA
    echo "<h2>Inserto un nuevo cliente</h2>";
    $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Teresa', 'La Unión');";
    $conexion->query($sql);
    $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Peter', 'Molina de Segura');";
    $conexion->query($sql);

    echo "<h3>ID del último registro insertado: " . $conexion->insert_id . "</h3>";
    
    //EJECUTAR una modificación de registros sencilla
    echo "<h2>Modifico los clientes que se llamen Peter</h2>";
    $sql = "UPDATE clientes SET ciudad = 'Calasparra' WHERE nombre = 'Peter'";
    $conexion->query($sql);

    //CONSULTA SELECT CON RESULTADO ÚNICO Y ARRAY ASOCIATIVO COMO RESPUESTA
    echo "<h2>Consulta con un resultado único</h2>";
    $consulta = "SELECT nombre, ciudad FROM clientes WHERE id = 2";
    $resultado = $conexion->query($consulta);
    $fila=$resultado->fetch_assoc();
    $nombre=$fila["nombre"];
    $ciudad=$fila["ciudad"];
    echo "El usuario con id = 2 se llama $nombre y es de $ciudad";

    //CONSULTA SELECT CON VARIOS RESULTADOS
    echo "<h2>Consulta con varios resultados usando array asociativo</h2>";
    $consulta = "SELECT * FROM clientes";
    $resultado = $conexion->query($consulta);
    
    // Ejemplo para imprimir los datos. El bucle recorre todos los registros.
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila['id'] . ", Nombre: " . $fila['nombre'] . ", Ciudad: " . $fila['ciudad'] . "<br>";
    }

    //CONSULTA SELECT CON VARIOS RESULTADOS con OBJETOS
    echo "<h2>Consulta con varios resultados usando un objeto</h2>";
    $consulta = "SELECT * FROM clientes";
    $resultado = $conexion->query($consulta);
    
    while($fila = $resultado->fetch_object()) {
        echo "ID: " . $fila->id . ", Nombre: " . $fila->nombre . ", Ciudad: " . $fila->ciudad . "<br>";
    }

    //NÚMERO DE REGISTROS EN EL RESULTADO
    echo "<h2>Se han mostrado ". $resultado->num_rows . " registros";


    //CONSULTA CON prepared statements
    echo "<h2>Consultas con Prepared Statements</h2>";
    $stmt = $conexion->prepare("SELECT * FROM clientes WHERE nombre = ? AND ciudad = ?");
    $nombre="Teresa";
    $ciudad="La Unión";
    $stmt->bind_param("ss", $nombre, $ciudad);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 0) exit('No rows');
    while($row = $result->fetch_assoc()) {
        echo "<br>Id: " . $row["id"] . ". Nombre: " . $row["nombre"];
    }    
    $stmt->close();

    //EJERCICIOS
    /*
    1-Modifica la consulta que devuelve un resultado para realizarla con objetos.
    2-Crea una función que muestre el id y el nombre de los clientes de Cartagena
    3-Crea una función que muestre el nombre de los clientes de Cartagena cuyo nombre empiece por M.
    4-Crea una función a la que se le pasen como parámetros un nombre y una ciudad e inserte un nuevo registro con esos datos.
    5-Crea una función que elimine un registro cuyo id se pase como parámetro.
    6-Prueba las funciones anteriores.
    7-Modifica al menos 2 de las funciones anteriores para usar "prepared statements"

    */
