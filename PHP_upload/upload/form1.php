<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Subir ficheros con PHP</title>
    </head>
    <body>
        <form action="upload1.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fichero" accept="image/*" />
            <button type="submit" name="botonsubir">Subir</button>
        </form>
        <?php
            /*foreach (array_merge(glob("uploads/*.jpg"), glob("uploads/*.png"))  as $filename) { 
                echo "<img src='$filename' style='width: 200px'><br> "; 
            }*/
        ?>
    </body>
</html>
