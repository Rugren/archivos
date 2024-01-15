<?php
    
    Class Vehiculo{
        private static $kmTotal;
        private static $cantidadVehiculos;

        public static function getKmTotal(){
            return Vehiculo::$kmTotal;
        }

        public static function getCantidadVehiculos(){
            return Vehiculo::$cantidadVehiculos;
        }
        protected $matricula;
        private $kmRecorridos;

        public function __construct($mat){
            $this->matricula = $mat;
        }

        public function getKmRecorridos(){
            return $this->kmRecorridos;
        }

        public function recorre($km){
            $this->kmRecorridos += $km;
            Vehiculo::$kmTotal += $km;
        }


        private $modelo;
        private $color;
        private $precio;


    //     public function __construct(static $kmTotal, static $cantidadVehiculos,  $kilometros,  $matricula,  $modelo,  $color,  $precio)
    //     {
    //         $this->kmTotal = $kmTotal;
    //         $this->cantidadVehiculos = $cantidadVehiculos;
    //         $this->kilometros = $kilometros;
    //         $this->matricula = $matricula;
    //         $this->modelo = $modelo;
    //         $this->color = $color;
    //         $this->precio = $precio;}
    // }

    }


?>