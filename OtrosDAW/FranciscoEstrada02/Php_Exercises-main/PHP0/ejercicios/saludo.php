<form action="saludo.php" method="post">
    <input type="text" name="nombre">
    

    <select name="nacion">
        <option value="ingles">Ingles</option>
        <option value="frances">Frances</option>
        <option value="español">Español</option>
    </select>

    <input type="submit" name="enviar">

</form>

<?php
    if(isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $nacionalidad = $_POST["nacion"];

        if($nacionalidad == "ingles"){
            echo ("Hello $nombre");
        }else if($nacionalidad == "español"){
            echo ("Hola $nombre");
        }else{
            echo("Bonjour $nombre");
        }
    }





?>