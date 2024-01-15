<?php
    include_once("Vehiculo.php");
    Class Coche extends Vehiculo{

        private static $kilometrajeTotal=0;

        public static function getKilometrajeTotal(){
            return Coche::$kilometrajeTotal;
        }

        private $kilometros;

        // private $matricula; (comentada porque es una propiedad de vehículo)
        private $modelo;
        private $color;
        private $posicion;
        private $enMarcha;
        private $kilometraje;
        private $grosorRueda;
  
    public function __construct($mat, $mod, $col)
    {
        $this->matricula=$mat;
        $this->modelo=$mod;
        $this->color=$col;
        $this->posicion=0;
        $this->grosorRueda=60;
    }


    public function arrancar()
    {
        $this->enMarcha=true;
        return "El coche con matrícula $this->matricula hace run run,... el coche está en marcha";
    }

    public function parar()
    {
        $this->enMarcha=false;
        return "clic, coche parado";
    }

    public function mover($metros)
    {
        $this->posicion += $metros;
        $aux= ($metros==1) ? "metro" : "metros";
        // Se pone un auxiliar para que si me pasan 1, sea metro y sino serán metros
        return "Has avanzado $metros $aux";
    }

    // GETTERS Y SETTERS    Setters y Getters
    public function setMatricula($mat){
        $this->matricula=$mat;
    }
    public function getMatricula(){
        return $this->matricula;
    }

    public function quemarRueda($tiempo){
        $milimetros=$tiempo * 0.1;
        $this->grosorRueda -= $milimetros;
        return "Te quedan $this->grosorRueda milímetros de rueda";
    }




}

?>