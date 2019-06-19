<?php
    include_once "ClaseVenta.php";

    class Euros
    {
        public function ConvertirEUR(){

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
                        $total = $arrayCambio[$sold]->getCosto() * 0.88;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total,2)."<br><br>";

                        break;
                    
                    case '3990.77':
                       
                        $total1 = $arrayCambio[$sold]->getCosto() / 46.34;                       
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total1,2)."<br><br>";
                        
                        break;
                    
                    case '350':
                    
                        $total2 = $arrayCambio[$sold]->getCosto() * 0.88;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total2,2)."<br><br>";
                    
                        break;

                    case '709101.50':
                        
                        $subtotal3 = $arrayCambio[$sold]->getCosto() / 3083.05;
                        $total3 = $subtotal3 * 0.88;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total3,2)."<br><br>";

                        break;

                    case '12279.30':
                        
                        $total4 = $arrayCambio[$sold]->getCosto() / 46.34;                       
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total4,2)."<br><br>";
                        
                        break;

                    case '987426':
                        
                        $total5= $arrayCambio[$sold]->getCosto() / 3726.04;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total5,2)."<br><br>";
                    
                        break;
                }                            
            } 
        }
    }