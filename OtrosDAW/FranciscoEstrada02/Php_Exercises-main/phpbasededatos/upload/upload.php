<?php   
    //Si me envían los datos desde el formulario...
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
        //Redirigimos de nuevo a index.php
        header("Status: 301 Moved Permanently");
        header("Location: index.php");
        exit;    
    }
?>
