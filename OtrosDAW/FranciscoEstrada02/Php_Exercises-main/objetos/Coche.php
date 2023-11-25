<?php

include_once("Vehiculo.php");

Class Coche extends Vehiculo{
    
    private $grosorRueda;
    public function __construct($matricula){
        parent::__construct($matricula);
    }

    public function quemarRueda($tiempo){
        $milimetos = $tiempo * 0.1;

        $this->grosorRueda -= $milimetos;

        return $this->grosorRueda;

    }

}

?>