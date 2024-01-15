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
        
        //Redirigimos a la página desde la que nos han llamado. 
        //Si no hay REFERER, redirigimos a form2.php        
        if (isset($_SERVER['HTTP_REFERER'])) {
            // Store Referral URL in a variable
            $refURL = $_SERVER['HTTP_REFERER'];            
        }else{
            $refURL="form2.php";
        }
        echo $refURL;
        header("Status: 301 Moved Permanently");
        header("Location: " . $refURL);
        exit;    
    }
?>
