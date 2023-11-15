<form action="" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>
 
<?php
    if(isset($_POST["numero"])){
        $numero=$_POST["numero"];
        $numerocifras=1;
        while($numero >= pow(10, $numerocifras)){
            $numerocifras++;
        }
        echo "El número $numero tiene $numerocifras cifras";
    }