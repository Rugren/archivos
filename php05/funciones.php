<?php
    function primeraLetra($palabra){
        return substr($palabra, 0, 1);
    }

    /* no sé si es $$ o &&
    function numeroCentral($n1, $n2, $n3){

        if(($n1>$n2 $$ $n1<$n3 || $n1<$n2 $$ $n1>$n3)){
            $resultado=$n1;
        }
        if(($n2>$n1 $$ $n2<$n3 || $n2<$n1 $$ $n2>$n3)){
            $resultado=$n2;
        }
        if(($n3>$n1 $$ $n3<$n2 || $n3<$n1 $$ $n3>$n2)){
            $resultado=$n3;
        }
        $maximo=max($n1, $n2, $n3);
        $minimo=min($n1, $n2, $n3);
        if($n1!=$maximo && $n1!=$minimo){
            $resultado=$n1;
        }else if($n2!=$maximo && $n2!=$minimo){
            $resultado=$n2;
        }else{
            $resultado=$n3;
        }

        $a=[$n1, $n2, $n3];
        sort($a);
        return $a[1];
    }
*/

    function numeroCentral($n1, $n2, $n3){
        $a=[$n1, $n2, $n3];
        sort($a);
        return $a[1]; // el 0 da el primero, el 1 da el del centro.
    }

    function longitudPalabra($palabra, $numero){
        // $tam=strlen($palabra); // strlen mejor que sizeof 
        // return $tam>$numero; //tam es la abreviación de tamaño // return true si tam es mayor que número, si tam es menos que numero da false
    // return strlen($palabra)>$numero;

        $tamanoPalabra= strlen($palabra); // tamanoPalabra es tamaño Palabra
        if ($tamanoPalabra > $numero){
            return true;
        }else {
            return false;
        }
    }

    function enMedio($n1, $n2){ // enMedio es la media por así decirlo
        $media=($n1 + $n2)/2;
        return round($media, 0); // la funcion round redondea. El 0 es para que no nos ponga decimales, si pongo 3, me da 3 decimales.
    }

