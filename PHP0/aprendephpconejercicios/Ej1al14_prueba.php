<?php
    require_once "Ej1al14.php";

    echo "<br>";
    echo "<h1> Ejercicio 1: esCapicua: </h1>";
    echo "El 55 es capicua: " . esCapicua(55) . "."; // si da 1 es que si, si da 0 es que no lo es.
    echo "<br>";
    echo "El 12 es capicua: " . esCapicua(12) . ".";

    echo "<br>";
    
    $pruebas=[123456, 123321, 121212, 122221, 111222];
    for($i=0; $i<sizeof($pruebas); $i++){
        if(esCapicua($pruebas[$i])){
            echo "El número " . $pruebas[$i] . " es capicúa";
        }else{
            echo "El número " . $pruebas[$i] . " NO es capicúa";
        }
        echo "<br>";
    }
    /* podemos sustituir y pasarle un número para que lo haga a mano, cambiar el sizeof por strlen. Y dónde pone "$pruebas" o "$pruebas[$i]" cambiar por el número que queramos

    for($i=0; $i<strlen(100); $i++){
        if(esCapicua(100)){
            echo "El número " . 100 . " es capicúaaaaaaaa";
        }else{
            echo "El número " . 100 . " NO es capicúaaaaaaaa";
        }
        echo "<br>";
    }
    */

    echo "<h1> Ejercicio 2. esPrimo: </h1>";
    echo "¿El número 5 es primo? " . "( " . esPrimo(5) . " )";
    echo "<br>";
    echo "¿El número 10 es primo? " . "( " . esPrimo(10) . " )";
    echo "<br>";


    ?>