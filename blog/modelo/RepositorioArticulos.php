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
            $arrayArticulos=[]; // El profesor para acortar puso $arts
            $cont=0;
            // Mientras haya filas en la consulta, las convierto en artículos del array
            while ($fila = $resultado->fetch_object()){
                $arrayArticulos[] = new Articulo();
                $arrayArticulos[$cont]->setPropiedades($fila->titulo, $fila->contenido, $fila->imagen);
                $arrayArticulos[$cont]->setId($fila->id);
                $cont++;
            }

            return $arrayArticulos;
        }

        public function findById($idABuscar){
            $textoSQL = "SELECT * FROM articulos WHERE id=$idABuscar";
            $resultado = $this->conexion->query($textoSQL);
            $fila = $resultado->fetch_object();
            $articulo = new Articulo();
            $articulo->setPropiedades($fila->titulo, $fila->contenido, $fila->imagen);
            $articulo->setId($fila->id);
            return $articulo;
        }

        // Método para guardar atículos
        public function save($articulo){
            $textoSQL = "INSERT INTO articulos(titulo, contenido, imagen, fecha) VALUES ";
            // esta línea siguiente se puede hacer en la anterior, pero hemos concatenado con el . para no hacerlo todo en una línea larga
            $textoSQL .= "('$articulo->titulo', '$articulo->contenido', '$articulo->imagen', '$articulo->fecha')";

            $this->conexion->query($textoSQL);
        }





    }