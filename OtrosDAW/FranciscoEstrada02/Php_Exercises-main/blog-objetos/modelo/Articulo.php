<?php
class Articulo
{
    public $id;
    public $titulo;
    public $contenido;
    public $imagen;
    public $fecha;

    public $destacado;
    public $id_tema;

    public function __construct()
    {
        $this->fecha = date('Y-m-d');
    }

    public function setPropiedades($tit, $cont, $img)
    {
        $this->titulo = $tit;
        $this->contenido = $cont;
        $this->imagen = $img;

    }

    public function mostrar()
    {
        echo "<div class='container mt-4'>";
    echo "<h2>$this->titulo</h2>";
    echo "<h6>$this->fecha</h6>";
    echo "<img src='/blog-objetos/img/$this->imagen' class='img-fluid' alt='Imagen del artículo'>";
    echo "<p>$this->contenido</p>";

    }
    

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
    public function mostrarCard()
    {
        echo "<div class='card m-5' style='width: 25rem;'>
                <div class='w-100 d-flex justify-content-center'>
                    <img src='/blog-objetos/img/$this->imagen' class='card-img-top' alt='' style='width:300px; height:300px; '>
                </div>
                 <div class='card-body'>
                    <h5 class='card-title'>$this->titulo</h5>
                    <p class='card-text'>".$this->cortarContenido()."...</p>
                    <a class='btn btn-primary' href='detalle.php?id=$this->id'>Ver Más</a> 
                </div>
        </div>";
    }

    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getDestacado()
    {
        return $this->destacado;
    }

    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setImagen($Imagen)
    {
        $this->imagen = $Imagen;
    }

    public function getImagen()
    {
        return $this->imagen;
    }
}
