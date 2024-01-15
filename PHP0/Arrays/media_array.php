<?php

    $a=[8, 2, 11, 1];
    $acumulador=0;
    for($n=0; $n<sizeof($a); $n++){
        $acumulador += $a[$n];
    }
    $media = $acumulador / sizeof($a);
    echo "La media es: $media";


?>