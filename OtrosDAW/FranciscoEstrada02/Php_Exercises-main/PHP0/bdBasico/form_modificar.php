<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Modificación</title>
    <!-- Incluye los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Modificar Registro</h2>

        <?php
        require_once("conexion.php");
        
        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

        // Comprueba si se ha enviado un ID para editar
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM clientes WHERE id = $id";
            $result = $conexion->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $id = $row['id'];
                $nombre = $row['nombre'];
                $ciudad = $row['ciudad'];
            }
        }
        ?>

        <!-- Formulario para modificar el registro -->
        <form action="modificar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" value="<?php echo $ciudad; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <!-- Incluye los archivos JavaScript de Bootstrap 5 (jQuery es necesario) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
