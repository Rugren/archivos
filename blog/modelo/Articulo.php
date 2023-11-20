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

    // Función para mostrar la miniatura
    public function mostrarMini(){
        return $this->titulo;
    }

    // Como está en prinvado hacemos un get id
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


}