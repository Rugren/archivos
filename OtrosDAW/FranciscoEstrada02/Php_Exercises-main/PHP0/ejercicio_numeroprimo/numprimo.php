<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $num1 = $_POST['numero1'];
    if(!isset($num1)) {
    
    
    ?>

    <form action="numprimo.php" method="post">
        <input type="number" name="numero1" min="0" autofocus>
        <input type="submit" value="enviar">
    </form>

    <?php 
        } else {
            if(esPrimo($num1)){
                echo "El $num1 es primo";
            }else{
                echo "El $num1 no es primo";
            }
        }
    function esPrimo($num1){
        $esPrimo = true;
          
        for($i = 2; $i < $num1; $i++){
            if($num1 % $i == 0){
                $esPrimo = false;
            }
        }

        if(($num1 == 0) || ($num1 == 1)){
            $esPrimo = false;
        }

        return $esPrimo;
    }
    ?>
</body>
</html>