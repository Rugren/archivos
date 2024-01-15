<?php
    require_once "Articulo.php";

    Class RepositorioArticulos{
        private $conexion; // para que guarde la conexión de la base de datos

        // constructor que cuando lo construyan nos pasen la conexion
        public function __construct($con)
        {
            $this->conexion = $con;
        }

        public function findAll(){
            // Escribo el texto de la consulta para recuperar todos los artículos de la BBDD
            $textoSQL = "SELECT * FROM articulos";
            // Realizo la consulta aprovechando la conexion que me han pasado en el constructor
            $resultado = $this->conexion->query($textoSQL);

            // Array de artículo que vamos a devolver
            $arrayArticulos=[]; // El profesor para acortar puso $arts en vez de $arrayArticulos
            $cont=0;
            // Mientras haya filas en la consulta, las convierto en artículos del array
            while ($fila = $resultado->fetch_object()){
                $arrayArticulos[] = new Articulo();
                $arrayArticulos[$cont]->setPropiedades($fila->titulo, $fila->contenido, $fila->imagen);
                $arrayArticulos[$cont]->setDestacado($fila->destacado);
                $arrayArticulos[$cont]->setId($fila->id);
                $cont++;
            }
            return $arrayArticulos;
        }

        public function mostrarCarousel(){
        echo 
        '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">';
    
            $arrayArticulos = $this->findAll();
            $destacadoAgregado = false;
    
            foreach ($arrayArticulos as $a) {
                if ($a->getDestacado() == 1) {
                    echo "<div class='carousel-item" . (!$destacadoAgregado ? " active" : "") . "'>
                    <img class='d-block w-100' src='img/" . $a->getImagen() . "' alt='Destacado' style='height: 750px; widht: auto'>
                    </div>";
    
                    $destacadoAgregado = true;
                }
            }
    
            if (!$destacadoAgregado) {
                foreach ($arrayArticulos as $a) {
                    echo "<div class='carousel-item active'>
                    <img class='d-block w-100' src='../img/" . $a->getImagen() . "' alt='Artículo' style='max-height: 750px;'>
                    </div>";
                }
            }
    
        echo '</div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>';
        }

        public function findById($idABuscar){
            $textoSQL = "SELECT * FROM articulos WHERE id=$idABuscar";
            $resultado = $this->conexion->query($textoSQL);
            $fila = $resultado->fetch_object();
            $articulo = new Articulo();
            $articulo->setPropiedades($fila->titulo, $fila->contenido, $fila->imagen);
            $articulo->setDestacado($fila->destacado);
            $articulo->setId($fila->id);
            return $articulo;
        }

        // Método para guardar atículos
        public function save($articulo){
            $textoSQL = "INSERT INTO articulos(titulo, contenido, imagen, fecha, destacado) VALUES ";
            // esta línea siguiente se puede hacer en la anterior, pero hemos concatenado con el . para no hacerlo todo en una línea larga
            $textoSQL .= "('$articulo->titulo', '$articulo->contenido', '$articulo->imagen', '$articulo->fecha', '$articulo->destacado')";
            
            /* Ejecutar la línea siguiente SIEMPRE cada vez que llamemos a la Base de Datos, 
            sino es sólo una función vacía */
            $this->conexion->query($textoSQL);
        }

        public function update($articulo){
            $textoSQL = "UPDATE articulos SET titulo='" . $articulo->getTitulo() . "', ";
            // concatenamos con . todo el UPDATE, para no hacerno en una línea larga dentro de la anterior:
            /* Esto: $textoSQL .= "titulo='" . $articulo->getTitulo() . "',"; 
            ya está puesto después del "UPDATE articulos SET titulo='" . (2-3 líneas más arriba) */
            $textoSQL .= " contenido='" . $articulo->getContenido() . "', ";
            $textoSQL .= " imagen='" . $articulo->getImagen() . "', ";
            $textoSQL .= " fecha='" . $articulo->getFecha() . "', ";
            $textoSQL .= "destacado='" . $articulo->getDestacado() . "' "; // quitada la coma porque ya no hay más campos, destacado es el último a mostrar en la BBDD (si me falta una coma sale mal en la DataBase)
            $textoSQL .= "WHERE id=" . $articulo->getId();

            /* Ejecutar la línea siguiente SIEMPRE cada vez que llamemos a la Base de Datos, 
            sino es sólo una función vacía */
            $this->conexion->query($textoSQL);
        }

        public function deleteById($id){
            $textoSQL = "DELETE FROM articulos WHERE id=$id";
            /* Así sería concatenado: (en línea anterior hecho en una)
            $textoSQL = "DELETE FROM articulos WHERE id=";
            $textoSQL .= $id; */

            /* Ejecutar la línea siguiente SIEMPRE cada vez que llamemos a la Base de Datos, 
            sino es sólo una función vacía */
            $this->conexion->query($textoSQL);
        }



}