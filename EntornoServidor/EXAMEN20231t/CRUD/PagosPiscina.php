<?php
// Ejercicio 5
Class PagosPiscina{    
    public $id;
    public $nombre_cliente;
    public $entradas_adultos;
    public $entradas_infantiles;
    public $metodo_pago;
    public $total_pago;

    public function gestionDePagos(){
        return $this->total_pago;
    }

}