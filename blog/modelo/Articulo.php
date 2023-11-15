<?php
Class Articulo{
    private $id;
    private $titulo;
    private $contenido;
    private $imagen;
    private $fecha;
    private $id_tema;

    private function mostrar(){
        $texto = "<h1>$this->titulo</h1>";
        $texto .= "<h6>$this->fecha</h6>";
        $texto .= "<img src'$this->imagen'>";
        $texto .= "<p>$this->contenido</p>";
        $texto .= "<h6>$this->id_tema</h6>";
    }

    // private function mostrarmini(){
    // }

}