<?php
    class Articulo{
        public $id;
        public $titulo;
        public $contenido;
        public $imagen;
        public $fecha;
        public $id_tema;

        public function __construct()
        {
            $this->fecha = date('Y-m-d');
        }

        public function setPropiedades($tit, $cont, $img){
            $this->titulo=$tit;
            $this->contenido = $cont;
            $this->imagen = $img;            
        }

        public function mostrar(){
            $texto = "<h1>$this->titulo</h1>";
            $texto .= "<h6>$this->fecha</h6>";
            $texto .= "<img src='$this->imagen'>";
            $texto .= "<p>$this->contenido</p>";
            $texto .= "<h6>$this->id_tema</h6>";

            return $texto;
        }

        public function mostrarCard(){
            
        }

        public function mostrarMini(){
            return $this->titulo;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function setFecha($fecha){
            $this->fecha=$fecha;            
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setContenido($contenido){
            $this->contenido=$contenido;
        }

        public function getContenido(){
            return $this->contenido;
        }

        public function setImagen($Imagen){
            $this->imagen=$Imagen;
        }

        public function getImagen(){
            return $this->imagen;
        }
    }