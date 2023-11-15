<?php
    // require "funciones.php"; // como está en la misma carpeta ponemos "funciones.php", si estuviera en otra carpeta sería "lib/funciones.php" o "/lib/funciones.php"
    require_once "funciones.php"; // requiere una vez el require_once, USAR SIEMPRE ESTE MEJOR, porque nos coge un único archivo.
    echo "patata su primera letra es " . primeraLetra("patata");
    echo "<br>";
    echo "Antonio su primera letra es " . primeraLetra("Antonio");
    echo "<br>";
    echo "Rubén su primera letra es " . primeraLetra("Rubén") . ".";
    echo "<br>";

    $a=["patata", "mesa", "leopardo"];
    foreach($a as $palabra){
        echo "<br> $palabra su primera letra es " . primeraLetra($palabra);
    }

    echo "<br>";
    echo "<br> Número central de 3, 11 y 7 es " . numeroCentral(3, 11, 7);
    echo "<br> Número central de 43, 11 y 17 es " . numeroCentral(43, 11, 17);
    echo "<br> Número central de 333, 111 y 777 es " . numeroCentral(333, 111, 777);

    /* esto lo quitó el profesor porque dijo que era muy complejo, complejidades
    $array=[[3, 11, 7],[13, 211, 87],[83, 11, 27] ];
    foreach($array as $numeros){
        echo "<br> Número central de $numeros ...
    }
    */
    echo "<br>";

    echo "<br>";
    echo "<h3>Longitud Palabra</h3>";
    echo longitudPalabra("Calabaza", 1); // como es que si, da true; da 1.
    echo "<br>";
    echo longitudPalabra("Calabaza", 7);
    echo "<br>";
    echo longitudPalabra("Calabaza", 19); // como es que no, da false; da 0.
    echo "<br>";

    echo "<br> En medio de 2 y 6 está " . enMedio(2, 6);
    echo "<br> En medio de 22 y 66 está " . enMedio(22, 66);
    echo "<br> En medio de 21 y 56 está " . enMedio(21, 56);
    echo "<br>";
