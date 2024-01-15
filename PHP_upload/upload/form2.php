<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Subir ficheros con PHP</title>
    </head>
    <body>
        <form action="upload2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fichero" accept="image/*" />
            <button type="submit" name="botonsubir">Subir</button>
        </form>
        <?php
            $ficherosJpg=glob("uploads/*.jpg");
            foreach($ficherosJpg as $nombreImagen){
                echo "<img src='$nombreImagen' style='height: 200px; margin: 10px; border:8px solid grey;'>"; 
            }
            //Ejercicio: Modifica el ejemplo para que se muestren también las imágenes png
        ?>
    </body>
</html>
