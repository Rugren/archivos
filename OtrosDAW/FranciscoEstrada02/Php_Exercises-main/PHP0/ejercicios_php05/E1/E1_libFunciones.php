<?php

function pasaPalabra($word){

    return substr($word, 0, 1);
    
}

function numbers($num1,$num2,$num3){

    $a = [$num1, $num2, $num3];

    sort($a);

    return $a[1];
    
}


function lengthWord($word, $number){

    $size = strlen($word);

    if( $size > $number){
        return true;
    }else{
        return false;
    }
}

function onTheMiddle($num1, $num2){

    $value = ($num1 + $num2) / 2;

    return round($value,0);

}