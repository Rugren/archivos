<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        if($numero % 2 ==0){
            echo "El número es par";
        }else {
            echo "El número es impar";
        }
    }

/*
<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        if($numero % 2 ==0 && $numero % 5 ==0){
            echo "El número es par y divisible por 5";
        }else {
            echo "El número no es par, ni divisible por 5";
        }
    }
*/
