<?php
    $secreto=7;
    //$intentos = isset($_POST["intentos"]) ? $_POST["intentos"] - 1 : 3;
    echo "Adivina el número del 0 al 10. "; // añadido por mi cuenta para que tenga texto el programa.
    if(isset($_POST["intentos"])){
        $respuesta=$_POST["respuesta"];
        $intentos=$_POST["intentos"];
        if($intentos>0){
            if($respuesta == $secreto){
                echo "Eres un fenómeno, has adivinado el número secreto";
            }else{
                $intentos--;
                echo "<form action='' method='POST'>";
                echo "<input type='number' name='respuesta'>";
                echo "<input type='hidden' name='intentos' value='$intentos'>";
                echo "<input type='submit' value='Enviar'> </form>";
                echo "Te quedan $intentos intentos, sigue probando"; // añadido por mi cuenta para que tenga texto el programa.
            }
        }else{
            echo "Has fracasado, no te quedan intentos.";
        }
    }else{
        $intentos=3;
        echo "<form action='' method='POST'>";
        echo "<input type='number' name='respuesta'>";
        echo "<input type='hidden' name='intentos' value='$intentos'>";
        echo "<input type='submit' value='Enviar'> </form>";
    }