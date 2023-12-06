<?php

    // A esto le falta algo
    $numero = $_GET["numero"];
    if($numero>5){
        echo "El número es mayor que 5";
    }else {
        echo "El número no es mayor que 5";
    }


    /* esto me lo sacó chatgpt pero no funciona
        // Verificar si la variable 'numero' está presente en la URL
        if (isset($_GET["numero"])) {
            $numero = $_GET["numero"];
            
            echo "El número proporcionado es: $numero<br>";
    
            if ($numero > 5) {
                echo "El número es mayor que 5";
            } else {
                echo "El número no es mayor que 5";
            }
        } else {
            echo "No se proporcionó el parámetro 'numero' en la URL.";
        }
        */
    ?>