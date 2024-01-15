<?php
    Class Producto{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $imagen;

  
    public function __construct($nombre, $descripcion, $precio, $imagen){
        // el id no ponerlo en el constructor, porque se autoincrementa
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }

    // Getters
    public function getId() {return $this->id;}
    
	public function getNombre() {return $this->nombre;}

	public function getDescripcion() {return $this->descripcion;}

	public function getPrecio() {return $this->precio;}

	public function getImagen() {return $this->imagen;}

    // Setters 
	public function setId( $id){$this->id = $id;}

	public function setNombre( $nombre) {$this->nombre = $nombre;}

	public function setDescripcion( $descripcion){$this->descripcion = $descripcion;
    }

	public function setPrecio( $precio){$this->precio = $precio;}

	public function setImagen( $imagen) {$this->imagen = $imagen;}


	public function mostrar(){
        // la variable $texto creada aquí nueva
        $texto = "<h2>$this->nombre</h2>";
        $texto .= "<p>$this->descripcion</p>";
        $texto .= "<p>Precio: $this->precio euros</p>";
        $texto .= "<img src='$this->imagen'>";

        return $texto;
    }

    // public funtion __toString {

    // }

}

?>