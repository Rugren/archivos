<?php

    include_once "Vehiculo.php";
    Class Bicicleta extends Vehiculo{

        private $pegatina;
        public function __construct($mat, $peg){
            $this->pegatina=$peg;
            parent::__construct($mat);
            $this->matricula=$mat;
        }

        public function hacerCaballito(){
            $valor = rand(0,2) == 1 ? "Te has pegado un piñazo con caballito y sin dientes 🦷" : "Te ha salido el caballito perfecto ✅";
            return $valor;

    }


}


?>