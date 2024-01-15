<?php

Class Articulo{

    public $id;
    public $titulo;
    public $contenido;
    public $imagen;
    public $fecha;
    public $id_tema;

    public function __construct(){
        $this->fecha = date("Y-m-d");
    }

    public function setPropiedades ($titulo, $contenido, $imagen){
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->imagen = $imagen;
    }

    


    public function mostrar(){

        $texto = "<h1>$this->titulo</h1>";
        $texto .= "<h6>$this->fecha</h6>";
        $texto .= "<img src='$this->imagen'>";
        $texto .= "<p>$this->contenido</p>";
        $texto .= "<h6>$this->id_tema</h6>"; 


        return $texto;

    }

    public function mostrarmini(){



        return $this->titulo;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdTema()
    {
        return $this->id_tema;
    }

    public function setIdTema($id_tema)
    {
        $this->id_tema = $id_tema;

        return $this;
    }
}