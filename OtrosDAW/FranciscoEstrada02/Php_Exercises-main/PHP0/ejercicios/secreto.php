

<?php

$secreto=7;
//$intentos = isset($_POST["intentos"]) ? $_POST["intentos"] - 1 : 3;
if(isset($_POST["intentos"])){
    $respuesta=$_POST["respuesta"];
    $intentos=$_POST["intentos"];
    if($intentos>0){
        if($respuesta == $secreto){
            echo "Eres una fucking bestia adivinando";
        }else{
            $intentos--;
            echo "<form action='' method='POST'>";
            echo "<input type='number' name='respuesta'>";
            echo "<input type='hidden' name='intentos' value='$intentos'>";
            echo "<input type='submit' value='Enviar'> </form>";
        }
    }else{
        echo "Has fracasado, no te quedan intentos";
    }
}else{
    $intentos=3;
    echo "<form action='' method='POST'>";
    echo "<input type='number' name='respuesta'>";
    echo "<input type='hidden' name='intentos' value='$intentos'>";
    echo "<input type='submit' value='Enviar'> </form>";
}




?>