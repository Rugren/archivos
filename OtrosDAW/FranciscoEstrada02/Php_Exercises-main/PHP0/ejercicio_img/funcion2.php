<?php




function suma($s1, $s2){
    $suma = $s1 + $s2;

    return $suma;
}
function resta($s1, $s2){
    $resta = $s1 - $s2;
    return $resta;
}
function multiplicacion($s1, $s2){
    $multiplicacion = $s1 * $s2;
    return $multiplicacion;
}

function division($s1, $s2){
    $division = $s1 / $s2;
    return $division;
}

function raizCuadrada($s1){
    $raizCuadrada = sqrt($s1);
    return $raizCuadrada;
}

function potencia($base, $exponente){
    $raiz = pow($base, $exponente);
    return $raiz;
}

function voltea($numero){
    $numVoltea = (string)$numero;

    $reverseNum = strrev($numVoltea);

    return $reverseNum;
}

function numDigitos($numero){
    
    $lenghtNumber = strlen(strval($numero));

    return $lenghtNumber;
}

function capicuaNumber($numero){
    $numberoAlReves = voltea($numero);

    if($numberoAlReves == $numero){
        $validacion ="Si es capicua";
    }else{
        $validacion = "No es capicua";
    }
        return $validacion;
}



?>