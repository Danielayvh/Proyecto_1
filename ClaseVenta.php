<?php
    class Venta{
        private $_Codigo;
        private $_Costo;
        private $_Moneda;

        function __construct($codigo,$costo,$moneda){
            $this->_Codigo = $codigo;
            $this->_Costo = $costo;
            $this->_Moneda = $moneda;
        }
        public function getCodigo(){
            
            return $this->_Codigo;
        }
        public function getCosto(){

            return $this->_Costo;
        }
        public function getMoneda(){

            return $this->_Moneda;
        }
    }