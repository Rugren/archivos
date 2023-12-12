<?php
    //Conectamos con el servidor 
    $conexion=new mysqli("localhost", "ruben", "Murcia2023", "h0122u0007_ruben");
    // para subirlo a https://telosabes.com/ruben 

    //Creamos la base de datos si no existe
    $consulta="CREATE DATABASE IF NOT EXISTS h0122u0007_ruben;";
    $conexion->query($consulta);

    //Seleccionamos la base de datos y creamos la tabla si no existe (puesto abajo)
    // $conexion->select_db("h0122u0007_ruben");

        /* Seleccionamos la base de datos (que la creará, por eso hemos comentado la línea anterior) 
        y creamos la tabla si no existe */
        $conexion->select_db("h0122u0007_ruben");
        $consulta="CREATE TABLE IF NOT EXISTS equipos (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(30) NOT NULL,
            observaciones TEXT
            -- no poner coma en el último campo. SINO no lo crea en la BBDD

            -- created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            -- updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );";
        $conexion->query($consulta);

        /* Se debería poner así, que está mejor hecho, 
        pero lo haremos línea por línea por si falla algo saber dónde está el fallo 
        $consulta = "INSERT INTO equipos (nombre, observaciones) VALUES
        ('Nottingham Prisa', 'Buena gente. Manolo, María, Benito'),
        ('Aston Birra', 'Muy fuertes. Marta, Ana y Julia'),
        ('Maccabi de Levantar', 'Buenos. Arvydas, Drazen, Chacho'),
        ('Inter Mitente', 'El último día no pagaron la pista. Audie, Carmen, Roberto');
        $conexion->query($consulta);
        */

        /* UNA VEZ QUE CREE LOS EQUIPOS, comentarlos para que no me los vuelva a crear de nuevo: */
        /*
        $consulta = "INSERT INTO equipos (nombre, observaciones) VALUES
        ('Nottingham Prisa', 'Buena gente. Manolo, María, Benito')";
        $conexion->query($consulta);

        $consulta = "INSERT INTO equipos (nombre, observaciones) VALUES
        ('Aston Birra', 'Muy fuertes. Marta, Ana y Julia')";
        $conexion->query($consulta);

        $consulta = "INSERT INTO equipos (nombre, observaciones) VALUES
        ('Maccabi de Levantar', 'Buenos. Arvydas, Drazen, Chacho')";
        $conexion->query($consulta);

        $consulta = "INSERT INTO equipos (nombre, observaciones) VALUES
        ('Inter Mitente', 'El último día no pagaron la pista. Audie, Carmen, Roberto')";
        $conexion->query($consulta);
*/
