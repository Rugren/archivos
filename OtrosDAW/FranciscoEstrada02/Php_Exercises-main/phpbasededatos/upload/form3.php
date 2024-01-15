<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Subir ficheros con PHP</title>
    </head>
    <body>
        <!-- Pongo el formulario para subir los archivos ATENCIÓN>>>> enctype-->
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fichero" accept="image/*" />
            <button type="submit" name="botonsubir">Subir</button>
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
            foreach($ficherosJpg as $nombreImagen){
                echo "<img src='$nombreImagen' style='height: 150px; margin: 10px; border:8px solid grey;'>"; 
            }

        ?>
    </body>
</html>