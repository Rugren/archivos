<form action="" method="POST">
    <input type="number" value="numero">
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        echo substr($numero, -1, 1);
    }