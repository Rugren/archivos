<form action="" method="POST">
    <h2> ¿De qué color era el caballo blanco de Santiago? </2>
    <input type= "radio" value= "rojo" name = "caballo" >Rojo 
    <input type= "radio" value= "verde" name = "caballo" >Verde
    <input type= "radio" value= "azul" name = "caballo" >Azul
    <input type= "radio" value= "blanco" name = "caballo" >Blanco 
    <input type= "submit" value= "Enviar">
</form>

<?php
    if(isset($_POST["caballo"])){
        $respuesta = $_POST["caballo"];
    }
    