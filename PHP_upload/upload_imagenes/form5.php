<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Subir ficheros con PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Pongo el formulario para subir los archivos ATENCIÓN>>>> enctype-->
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" class="btn btn-warning" name="fichero" accept="image/*" />
            <button class="btn btn-primary" type="submit" name="botonsubir">Subir</button>
        </form>
        
        <?php
            //Si me envían los datos desde el formulario, subo el nuevo fichero
            if(isset($_POST['botonsubir'])){            
                //Leo el nombre del archivo y lo modifico añadiendo fecha y hora para que no se "machaquen"
                $nombreFichero = date("Y-m-d - H-i-s")."-".$_FILES['fichero']['name'];
                //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
                $file_loc = $_FILES['fichero']['tmp_name'];
                //Leo datos del archivo como tamaño y tipo que me pueden servir para validarlos o rechazarlos
                $file_size = $_FILES['fichero']['size'];
                $file_type = $_FILES['fichero']['type'];
                $folder="uploads/"; 
                //movemos el archivo a la carpeta deseada
                move_uploaded_file($file_loc,$folder.$nombreFichero);                            
            }
            
            //Utilizo la funcion glob para leer todos los archivos de una carpeta con un nombre que sigue un patrón
            //En nuestro caso nos interesan todos los jpg

            $ficherosJpg=glob("uploads/*.jpg");
            $contador=0;
            echo "<div class='row'>";
            foreach($ficherosJpg as $nombreImagen){ 
                echo '<div class="card col-1" style="width: 18rem;">';
                echo "<img src='$nombreImagen' class='card-img-top' alt='...'>";
                echo '<div class="card-body">';
                echo "<h5 class='card-title'>$nombreImagen</h5>";
                echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';
                echo "<a href='$nombreImagen' class='btn btn-primary'>Ver tamaño completo</a>";
                echo "</div>               </div>";
                
            }
            echo "</div>";
        ?>
            
    </body>
</html>