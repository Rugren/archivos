<?php

    echo "<h1> Ejercicio 1 </h1>";

    $alumnos=['Ruben', 'Fran', 'Adri', 'Mikel', 'Manu']; 

    for($n1=0; $n1<sizeof($alumnos); $n1++){
        echo "Alumnos: $alumnos[$n1]";
        echo "<br>";
    }


    echo "<h1> Ejercicio 2 </h1>";
    $pais=['España', 'Francia', 'Italia', 'Inglaterra', 'Alemania']; 
    $capital=['Madrid', 'Paris', 'Roma', 'Londres', 'Berlín'];

    for($n2=0; $n2<sizeof($pais); $n2++){
        echo "País: <b> $pais[$n2], Capital: <label style= color:red> $capital[$n2] </label style= color:red>";
        echo "<br>";
    }


    echo "<h1> Ejercicio 3 </h1>";
    $alumnos3=['Ruben', 'Fran', 'Adri', 'Mikel', 'Manu'];
    $notas3=['8', '9', '10', '7', '4'];

    echo "<table style= 'border: solid black 2px'>";

    for($n3=0; $n3<sizeof($alumnos3); $n3++){

        // Alumnos + notas (Sin tabla)
        echo "Alumnos: $alumnos3[$n3]";
        echo "<br>";
        echo "Notas: $notas3[$n3]";
        echo "<br>";
        echo "<br>";

        // Alumnos + notas (Con tabla)
        echo "
        <tr> 
        <td style='border: solid black 2px'> 
        Alumnos: $alumnos3[$n3] -- Notas: $notas3[$n3] 
        </td> 
        </tr>";
    }
    echo "</table>";



    echo "<h1> Ejercicio 4 </h1>";
    echo "<table style= 'border: solid black 2px'>";

    echo "<h3> Ejercicio 4 (Países en la tabla) </h3>";
    for($n4=0; $n4<sizeof($pais); $n4++){
        echo "
        <tr> 
        <td style='border: solid black 2px'> 
        País: $pais[$n4]
        </td> 
        </tr>";
    }
    echo "</table>";

    echo "<h3> Ejercicio 4 (Países en la tabla con sus capitales) </h3>";
    echo "<table style= 'border: solid black 2px'>";
    for($n4=0; $n4<sizeof($pais); $n4++){
        echo "
        <tr> 
        <td style='border: solid black 2px'> 
        País: $pais[$n4] - Capital: $capital[$n4]
        </td> 
        </tr>";
    }
    echo "</table>";


    echo "<h1> Ejercicio 5 </h1>";
   /* // Array con los nombres de los equipos
    $equipos = array("Equipo1", "Equipo2", "Equipo3", "Equipo4", "Equipo5");
    
    // Array con los resultados
    $resultados = array("2-0", "2-2", "1-3", "1-0", "4-3");
    
    // Para verificar que ambos arrays tengan la misma longitud
    if (count($equipos) == count($resultados)) {
        // Iteramos sobre los arrays para mostrar los resultados en párrafos
        for ($n5 = 0; $n5 < count($equipos); $n5++) {
            echo "<p>{$equipos[$n5]} {$resultados[$n5]}</p>";
        }
    } else {
        echo "Error: La cantidad de equipos y resultados no coincide.";
    }*/

    
    $equipoLocal = ["Real Madrid", "Mallorca", "At. Madrid"];
    $equipoVisitante = ["Las Palmas", "Barcelona", "Sevilla"];
    
    $resultados = ["2-0", "2-2", "1-3"];
    
    if (count($equipoLocal) == count($resultados)) {
        for ($n5 = 0; $n5 < count($equipoLocal); $n5++) {
            echo "<p>{$equipoLocal[$n5]} {$resultados[$n5]} {$equipoVisitante[$n5]} </p>";
        }
    } else {
        echo "Error: La cantidad de equipos y resultados no coincide.";
    }


    // se entregó la tarea hasta el ejercicio 5.

    // Vuelta a entregar la siguiente tarea desde el 6 hasta el 9.

    echo "<h1> Ejercicio 6 </h1>";

    $Campeones_Eurobasket = array(
        2011 => "España", 
        2013 => "Francia", 
        2015 => "España", 
        2017 => "Eslovenia", 
        2022 => "España",
        2025 => "Por determinar");

    // Para mostrar el año en negrita y el campeón en color verde usando foreach, que es lo que nos pide el ejercicio.
    foreach ($Campeones_Eurobasket as $ano => $campeon) {
        echo "<p><strong>{$ano}</strong>: <span style='color: green;'>{$campeon}</span></p>";
    }

    echo "<h1> Ejercicio 7 </h1>";
    $JugBaloncesto1 = ["Chacho", "Navarro", "Gasol", "Rudy", "Garbajosa"];
    for($n7=0; $n7<sizeof($JugBaloncesto1); $n7++){

        echo "Imagen de: $JugBaloncesto1[$n7]";
        echo "<br>";
    
        // Se pone una imagen asiganda a cada nombre igual escrito. Mismo nombre en el array que en la foto, están en la carpeta: C:\xampp\htdocs\archivos\PHP0\Arrays\imgJugBaloncesto 
        echo "<img src='imgJugBaloncesto/". $JugBaloncesto1[$n7]. ".jpg' width=80px height= 80px>";
        echo "<br>";
    }

    echo "<h1> Ejercicio 7.1 (Solo imagenes) </h1>";
    $JugBaloncesto1 = ["Chacho", "Navarro", "Gasol", "Rudy", "Garbajosa"];
    for($n7=0; $n7<sizeof($JugBaloncesto1); $n7++){
    
        // Se pone una imagen asiganda a cada nombre igual escrito. Mismo nombre en el array que en la foto, están en la carpeta: C:\xampp\htdocs\archivos\PHP0\Arrays\imgJugBaloncesto 
        echo "<img src='imgJugBaloncesto/". $JugBaloncesto1[$n7]. ".jpg' width=80px height= 80px>";
        echo "<br>";
    }



/*
    echo "<h1> Ejercicio 7.x (probando de otra manera) </h1>";
    // no funcionan las imágenes, no cargan.
    $JugBaloncesto = array("chacho.jpg", "Navarro.jpg", "Gasol.jpg", "Rudy.jpg", "Garbajosa.jpg");
    foreach ($JugBaloncesto as $imagen) {
        echo "<img src='imgJugBaloncesto/' alt='$imagen'><br>";
    }
*/

    // Así con foto a la izq. Y a la derecha Jugador y el nombre.
    echo "<h1> Ejercicio 8 </h1>";
    $JugBaloncesto2 = ["Chacho", "Navarro", "Gasol", "Rudy", "Garbajosa"];

    echo "<table>";

    for($n8=0; $n8<sizeof($JugBaloncesto2); $n8++){

        // Columna de IMAGENES jugadores baloncesto:
        echo "<tr>";
        echo "<td style='border: solid black 2px'><img src='imgJugBaloncesto/". $JugBaloncesto2[$n8]. ".jpg' width=80px height= 80px></td>";

        // Columna de NOMBRES jugadores baloncesto:
        echo "<td style='border: solid black 2px'>"; // esta línea los mete dentro, sin ella están separados nombre de jugadores de las imágenes (cada una por su lado)
        echo "Jugador: $JugBaloncesto2[$n8]";

        echo "</td>";
        echo "</tr>";
        
    }
    echo "</table>";

    /*  Así se mete todo dentro de una misma tabla (Nombre y la imagen)
        echo "<tr>";

        // Columna de NOMBRES jugadores baloncesto:
        echo "<td style='border: solid black 2px'>"; // esta línea los mete dentro, sin ella están separados nombre de jugadores de las imágenes (cada una por su lado)
        echo "Jugador: $JugBaloncesto2[$n8]";
        //echo "</td>";

        echo "<td style='border: solid black 2px'><img src='imgJugBaloncesto/". $JugBaloncesto2[$n8]. ".jpg' width=80px height= 80px></td>";
        echo "</tr>";
    }
    echo "</table>";
    */

    // Así con Jugador y el nombre a la izq. Y a la derecha la foto
    echo "<h1> Ejercicio 8.1 (Prueba)</h1>";
    $JugBaloncesto2 = ["Chacho", "Navarro", "Gasol", "Rudy", "Garbajosa"];

    echo "<table>";

    for($n8=0; $n8<sizeof($JugBaloncesto2); $n8++){

        // Columna de NOMBRES jugadores baloncesto:
        echo "<tr>";
        echo "<td style='border: solid black 2px'>"; // esta línea los mete dentro, sin ella están separados nombre de jugadores de las imágenes (cada una por su lado)
        echo "Jugador: $JugBaloncesto2[$n8]";

        // Columna de IMAGENES jugadores baloncesto:
        echo "<td style='border: solid black 2px'><img src='imgJugBaloncesto/". $JugBaloncesto2[$n8]. ".jpg' width=80px height= 80px></td>";
        echo "</tr>";
    }
    echo "</table>";



    echo "<h1> Ejercicio 9 </h1>";
    $frase="Dábale arroz a la zorra el abad";
    echo "<h3>$frase</h3>";
    $convertir_a_array = explode(" ", $frase);
    for ($n9 = 0; $n9 < sizeof($convertir_a_array); $n9++) {
        echo "<p>{$convertir_a_array[$n9]} </p>"; // para mostrar cada una de las palabras de la $frase en un párrafo diferente.
    }
    // el "convertir_a_array" utilizado es el nombre que le hemos dado al array.

    /* Otra versión, no es la que pide el ejercicio, sólo pruebas (muestra la misma palabra 2 veces por párrafo):
    for ($n9 = 0; $n9 < sizeof($convertir_a_array); $n9++) {
        echo "<p>{$convertir_a_array[$n9]} {$frase[$n9]} {$convertir_a_array[$n9]} </p>";
    }
    */




?>