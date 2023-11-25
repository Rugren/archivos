<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/estilos3.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="bootstrap" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php
        $tipos = ["grano", "soluble", "capuchino", "infusiones", "sin vaso"];


        $variedades = [
            $tipos[0] => ["corto", "ristreto", "largo expresso"],
            $tipos[1] => ["soluble corto", "soluble largo",  "Cortado soluble"],
            $tipos[2] => ["cafe vainilla", "cortado vainilla", "vainilla con leche"],
            $tipos[3] => ["chocolate", "chocolate con leche", "Chocolate blanco"],
            $tipos[4] => ["cortado sin vaso", "largo sin vaso", "vainilla sin vaso"]
        ];


        if (isset($_GET["opcion"])) {
            $tipoSeleccionado = $_GET["opcion"];
            echo "<div class='row'>
                    <div class = 'col'>
                        <h2>$tipoSeleccionado</h2>
                    </div>
                </div>
                <div class='row'>
                    <div class='col'>
                        <img src='img/subtipos/$tipoSeleccionado.png'>
                    </div>
                </div>";
            echo "<div class='container-azucar'>
                    <form method= 'post' action='' class='form-container'>
                        <h3>Selecciona la cantidad de azucar que desee</h3>
                        
                        <input name='largoAzucar' type='range' min=0 max=3></input>
                        
                        <h3>Selecciona la cantidad de largo que desee su café</h3>
                        
                        <input name='largoCafe' type='range' min=0 max=3></input>
                        
                        <br>
                        <br>
                        <input type='submit' value='Preparar' id='botonSubmit'>
                    </form>
                    
            </div>";
            
            
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $cantidadAzucar = isset($_POST["largoAzucar"]) ? $_POST["largoAzucar"] : "No seleccionado";
            $cantidadCafe = isset($_POST["largoCafe"]) ? $_POST["largoCafe"] : "No seleccionado";
            echo "<div class='resultados'>
                <p>Cantidad de azúcar seleccionada: <span class='resultado'>$cantidadAzucar</span></p>
                <p>Cantidad de largo del café seleccionada: <span class='resultado'>$cantidadCafe</span></p> 
            </div>";
        }
        ?>

        

        
    </div>
    

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>