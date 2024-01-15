<?php

require_once("Articulo.php");

Class RepositorioArticulos{
    private $conexion;


    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function findAll(){

        $consulta = "SELECT * FROM articulos";
        $resultado = $this->conexion->query($consulta);
        $arrayArticulos =[];
        $cont = 0;

        while($fila = $resultado->fetch_object()){
            $arrayArticulos[] = new Articulo;
            $arrayArticulos[$cont]->setPropiedades($fila->titulo,$fila->contenido, $fila->imagen);
            $arrayArticulos[$cont]->setId($fila->id);
            $cont++;
        }

        return $arrayArticulos;
    }

    public function findById($id){
        $consulta = "SELECT * FROM articulos";

        $this->conexion->query($consulta);
        $resultado = $this ->conexion -> query($consulta);
        $fila = $resultado->fetch_object();

        $articulo = new Articulo;
        $articulo->setPropiedades($fila->titulo,$fila->contenido, $fila->imagen);

        return $articulo;
    }

    public function save($articulo){
        $consulta = "INSERT INTO articulos(titulo, contenido, imagen, fecha) VALUES ";
        $consulta .= "('$articulo->titulo', '$articulo->contenido', '$articulo->imagen', '$articulo->fecha')";

        $this->conexion->query($consulta);

    }
}