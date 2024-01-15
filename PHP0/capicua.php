<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>
<?php
    if(isset($_POST["numero"])){
        
        $numero=$_POST["numero"];
 
        /*$escapicua=true;
        for($n=0; $n<strlen($numero)/2; $n++){
            if(substr($numero, $n, 1) != substr($numero, -($n+1), 1)){
                echo "No es capicua";
                $escapicua=false;
            }
        }
        if($escapicua){
            echo "Es capicua";
        }*/
 
        if(strlen($numero) == 1){
            echo "Es capicúa";
        }
 
        if(strlen($numero) == 2 && substr($numero, 0, 1) == substr($numero, 1,1)){
            echo "Es capicúa";
        }
 
        if(strlen($numero) == 3 && substr($numero, 0, 1) == substr($numero, 2,1)){
            echo "Es capicúa";
        }
 
        if(strlen($numero) == 4 && substr($numero, 0, 1) == substr($numero, 3, 1) && 
            substr($numero, 1, 1) == substr($numero, 2, 1)){
                echo "Es capicúa";
        }
 
        if(strlen($numero) == 5 && substr($numero, 0, 1) == substr($numero, 4, 1) && 
            substr($numero, 1, 1) == substr($numero, 3, 1)){
                echo "Es capicúa";
        }
 
    }