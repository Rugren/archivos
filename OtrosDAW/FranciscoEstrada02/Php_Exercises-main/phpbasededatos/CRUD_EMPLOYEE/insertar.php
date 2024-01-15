<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />

    <?php require_once("conexion.php") ?>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form action="" method="post" class="bg-dark text-light p-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Introduce a valid e-mail.</small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputPassword1">
            </div>
            <div class="">
                <label for="photo">Photo</label>
                <input type="text" name="photo">
            </div>
            <div class="">
                <label for="departament">Departamento</label>
                <select name="departament">
                    <option>Almacen</option>
                    <option>Produccion</option>
                    <option>Administración</option>
                </select>
            </div>

            <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">
            <button type='button' class='btn btn-primary'><a href='index.php'>Volver</a></button>
        </form>

        <?php


        if (isset($_POST["enviar"])) {
            $name1 = $_POST["name"];
            $email = $_POST["email"];
            $photo = $_POST["photo"];
            $departament = $_POST["departament"];
            

            $sql = "INSERT INTO employees(name,email,photo,departament) VALUES ('$name1','$email','$photo','$departament')";

            $conexion->query($sql);
            header("location:index.php");
        }

        

        ?>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>