<?php
    /* puestos a mano, así no, hacer con un bucle. Hecho más abajo.
    echo "0, ";
    echo "1,";
    echo "1,";
    echo "2,";
    echo "3,";
    echo "5,";
    echo "8,";*/

    $n1=0;
    $n2=1;
    echo "0, 1, ";
    for($n=0; $n<50; $n++){
        $fibo = $n1 + $n2;
        echo "$fibo, ";
        $n1=$n2;
        $n2=$fibo;
    }

