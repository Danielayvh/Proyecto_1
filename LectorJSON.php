<?php
    include_once "ClaseVenta.php";

    class LectorJson
    {

        public function Leer(){
            
            $arrayVentas= array();
           
            $venta = json_decode(file_get_contents('files Json/transacciones.json'));
            foreach ($venta as $key => $value) {
                array_push($arrayVentas, new Venta($value->code, $value->amount, $value->currency));
            }

            $long = count($arrayVentas);
            for ($sold=0; $sold<$long ; $sold++) 
            {  
                echo "<br>Codigo del producto: " . $arrayVentas[$sold]->getCodigo() . "<br>Precio: " . $arrayVentas[$sold]->getCosto() . "<br>Moneda: " . $arrayVentas[$sold]->getMoneda() . "<br>";    
                            
            } 
            
        }
    }