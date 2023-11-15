<?php
    for($n=0; $n<=20; $n++){
        echo "<br>" . $n*5;
    }
    for($n=0; $n<=100; $n+=5){
        echo "<br>$n";
    }
    for($n=0; $n<=100; $n++){
        if($n % 5 ==0)
            echo "<br>$n";
    }