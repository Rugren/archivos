<form action="" method="POST">
    <input type="text" name="nombre">
    <select name ="nacion">
        <option value="es"> Español </option>
        <option value="en"> Inglés </option>
        <option value="fr"> Francés </option>
</select>
    <input type="submit" value="Enviar">
</form>

<?php
    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $nacion = $_POST["nacion"];

        if($nacion=="es"){
            echo "Hola $nombre";
        }else if($nacion=="en"){
            echo "Hello $nombre";
        }else{
            echo "Bonjour $nombre";
        }

    }