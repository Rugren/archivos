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
 
            echo '<div id="carouselExample" class="carousel slide w-25">';
            echo '<div class="carousel-inner">';
 
            $ficherosJpg=glob("uploads/*.jpg");
            $contador=0;
            foreach($ficherosJpg as $nombreImagen){                
                
                $textoActivo = ($contador==0) ? "active" : "";
                echo "<div class='carousel-item $textoActivo' >";
                echo "<img src='$nombreImagen' class='d-block w-100' alt=''>";
                echo '</div>';
                $contador++;
                /*echo "<a href='$nombreImagen'>";
                echo "<img src='$nombreImagen' style='height: 100px; margin: 10px; border:8px solid grey;'>"; 
                echo "</a>";*/
            }
        ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </body>
</html>