<?php
    include_once "ClaseVenta.php";

    class PesosCOP
    {
        public function ConvertirCOP(){

            $arrayCambio= array();
           
            $venta = json_decode(file_get_contents('files Json/transacciones.json'));
            foreach ($venta as $key => $value) {
                array_push($arrayCambio, new Venta($value->code, $value->amount, $value->currency));
            }

            $long = count($arrayCambio);
            for ($sold=0; $sold<$long ; $sold++) 
            {  
                $precios = $arrayCambio[$sold]->getCosto();
                
                switch ($precios) {
                    case '97.5':

                        $total = $arrayCambio[$sold]->getCosto() * 3083.05;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total,2)."<br><br>";

                        break;
                    
                    case '3990.77':

                        $precio1 = $arrayCambio[$sold]->getCosto() / 46.34;
                        $subtotal1 = $precio1 / 0.88;
                        $total1 = $subtotal1 * 3083.05;                     
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total1,2)."<br><br>";
                        
                        break;
                    
                    case '350':
                    
                        $total2 = $arrayCambio[$sold]->getCosto() * 3083.05;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total2,2)."<br><br>";
                    
                        break;

                    case '709101.50':
                        
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".$arrayCambio[$sold]->getCosto()."<br><br>";

                        break;

                    case '12279.30':
                        
                        $precio4 = $arrayCambio[$sold]->getCosto() / 46.34;
                        $subtotal4 = $precio4 / 0.88;
                        $total4 = $subtotal4 * 3083.05;                     
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total4,2)."<br><br>";
                        
                        break;

                    case '987426':
                        
                        $precio5 = $arrayCambio[$sold]->getCosto() / 3726.04;
                        $subtotal5 = $precio5 / 0.88;
                        $total5 = $subtotal5 * 3083.05;                     
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total5,2)."<br><br>";
                    
                        break;
                }                            
            } 
        }
    }