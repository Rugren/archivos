<?php

Class Articulo{
    // se tiene que poner private, pero lo hemos puesto public para hacer rápido en RepositorioArticulos.php en el Método para guardar atículos: la línea 46;  $textoSQL .= "('$articulo->titulo', '$articulo->contenido', '$articulo->imagen', '$articulo->fecha')";
    // porque tendríamos que crear los getter y los setters
    
    // private $id;
    // private $titulo;
    // private $contenido;
    // private $imagen;
    // private $fecha;
    // private $id_tema;

    public $id;
    public $titulo;
    public $contenido;
    public $imagen;
    public $fecha;
    public $destacado;
    public $id_tema;

    // Hacer vacío el constructor y luego un setter (setPropiedades)
    public function __construct(){
        $this->fecha = date('Y-m-d'); // este hace que cuando cree un artículo se ponga la fecha actual
    }

    public function setPropiedades($tit, $cont, $img){
        $this->titulo = $tit;
        $this->contenido = $cont;
        $this->imagen = $img;
    }

    /* Así era como lo teníamos */
    // con esta manera muestra todo cuando devuelve texto.
    /*public function mostrar(){
        $texto = "<h1>$this->titulo</h1>";
        $texto .= "<h6>$this->fecha</h6>";
        $texto .= "<img src='$this->imagen'>";
        $texto .= "<p>$this->contenido</p>";
        $texto .= "<h6>$this->id_tema</h6>";

        return $texto;
    } */

    // Esta función "mostrar" muestra el archivo en detalle.php
    public function mostrar(){
        echo "<div class='container mt-4'>";
        echo "<h2>$this->titulo</h2>";
        echo "<h6>$this->fecha</h6>";
        echo "<img src='/archivos/blog/img/$this->imagen' class='img-fluid' alt='Imagen del artículo'>";
        echo "<p>$this->contenido</p>";
        // echo "<h6>$this->id_tema</h6>";
    }

    /*  Esta funcion cortarContenido es llamada en function mostrarCard 
        (y mostrarCard la llamamos en index.php de la página principal 
        para que acorte el texto y no se ponga completo todo el contenido) */
    public function cortarContenido()
    {
        $contenido = $this->contenido;
        $contenido = $this->contenido;
        if (strlen($contenido) > 25) {
            return substr($contenido, 0, 100);
        } else {
        return $contenido;
        }
    }

    public function mostrarCard(){
        echo "<div class='card m-5' style='width: 25rem;'>
                <div class='w-100 d-flex justify-content-center'>
                    <img src='/archivos/blog/img/$this->imagen' class='card-img-top' alt='' style='width:300px; height:300px; '>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$this->titulo</h5>
                    <p class='card-text'>".$this->cortarContenido()."...</p>
                    <a class='btn btn-primary' href='detalle.php?id=$this->id'>Ver Más</a>
                </div>
        </div>";
    }

    // Función para mostrar la miniatura
    public function mostrarMini(){
        return $this->titulo;
    }

    // Como está en privado hacemos un get id
    public function getId(){
        return $this->id;
    }
    // Los setters no llevan return
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

    public function setImagen($imagen){
        $this->imagen=$imagen;
    }
    public function getImagen(){
        return $this->imagen;
    }

    public function getDestacado(){
        return $this->destacado;
    }
    public function setDestacado($destacado){
        $this->destacado = $destacado;
    }


}