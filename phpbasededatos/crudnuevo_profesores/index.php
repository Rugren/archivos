<?php
    include "conexion.php";
    include "templates/header.php"; 

    csrf();
    if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
        die();
    }
?>

<!-- En archivo: DES 04 B Nuevo CRUD .pdf 

y ver todo lo del ejercicio: 
Crea un ejemplo similar al anterior para añadir en la misma base de datos una 
tabla con los datos de los profesores:
a. Nombre
b. Apellidos
c. Módulo que imparte 
d. Curso.

(cambiar alumnos por profesores)
(cambiar email por modulo)
    y este: <input type="text" name="modulo"
(cambiar edad por curso)

y en archivo conexion.php cambiar el nombre crudantonio por crudProfesores.

Habíamos creado por error el crudantonio en la base de datos de phpmyadmin y la hemos borrado con:
 drop DATABASE crudantonio;
 (escrito dentro de SQL de la misma base de datos, ya eliminados)

-->



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="crear.php"  class="btn btn-primary mt-4">Crear profesores</a>
                <hr>
            </div>            
        </div>
        <div class="container">
            <div class="row">
                <form action="" method="post" class="form-inline">
                    <div class="form-group mr-3">
                    <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
                    </div>
                    <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
                    <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
                </form>                
            </div>
        </div>
        <?php            
            if (isset($_POST['apellido']) ) {
                $apellido=$_POST['apellido'];
                $consultaSQL = "SELECT * FROM profesores WHERE apellido LIKE '%$apellido%'";
                $titulo = ($apellido!="") ? 'Lista de profesores (' . $_POST['apellido'] . ')': 'Lista de profesores';
            } else {
                $consultaSQL = "SELECT * FROM profesores";
                $titulo = 'Lista de profesores';
            }   
            
            echo "<h1 class='mt-3'>$titulo</h1>";
        ?>        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>E-mail</th>
                    <th>curso</th>
                    <th>imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
        <?php                 
                 
            $consulta=$conexion->query($consultaSQL);    
            while($elemento=$consulta->fetch_object()){  
                $id=$elemento->id;
                $nombre=$elemento->nombre;
                $apellido=$elemento->apellido;
                $modulo=$elemento->modulo;
                $curso=$elemento->curso;
                $imagen=$elemento->imagen;
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$apellido</td>";
                echo "<td>$modulo</td>";
                echo "<td>$curso</td>";
                echo "<td>$imagen</td>"; // añadido para que ponga la imagen
                //echo "<td><a href='borrar.php?id=$id ?'>🗑️Borrar</a>";
                echo "<td><form action='borrar.php?id=$id' method='post' onSubmit='return confirm(\"Seguro?\")'><input type='submit' value='borrar'></form>";
                echo "<a href='editar.php?id=$id'>✏️Editar</a></td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>
    </div>

    <p><a href="https://www.neoguias.com/tutorial-crud-php/">Inspirado parcialmente en el tutorial de esta URL</a></p>
<?php 
    include "templates/footer.php"; 
?>
