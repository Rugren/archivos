<?php        
    
    if(isset($_POST["enviar"])){
        $usuario="fran";
        $password="1234";

        $usuarios=["adrian" => "4321", "fran" => "1234", "rguren" => "12345"];


        $usuarioFormulario=$_POST["username"];
        $passwordFormulario=$_POST["password"];       
        
        foreach($usuarios as $usuario => $password){
            session_start();
            //Guardamos los datos del usuario en SESSION            
            $_SESSION["logged"]=true;            
            $_SESSION["username"]=$usuario;
            
            header("location: index.php");
        }

    }else{
    ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login simple</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        </head>
        <body>
            <?php
                if(isset($_GET["error"])){
                    echo "<h2>Nombre de usuario o contraseña incorrectos</h2>";
                }
            ?>
            <div class="container">
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" name="enviar" value="Entrar">
                </form>
            </div>
        </body>
        </html>
    <?php
    }
?>