<?php
    include_once "ClaseVenta.php";

    class PesosARS
    {
        public function ConvertirARS(){

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
                        
                        $subtotal = $arrayCambio[$sold]->getCosto() * 0.88;
                        $total = $subtotal * 46.34;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total,2)."<br><br>";

                        break;
                    
                    case '3990.77':
                                              
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".$arrayCambio[$sold]->getCosto()."<br><br>";
                        
                        break;
                    
                    case '350':
                    
                        $subtotal2 = $arrayCambio[$sold]->getCosto() * 0.88;
                        $total2 = $subtotal2 * 46.34;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total2,2)."<br><br>";
    

                        break;

                    case '709101.50':
                        
                        $precio3 = $arrayCambio[$sold]->getCosto() / 3083.05;
                        $subtotal3 = $precio3 * 0.88;
                        $total3 = $subtotal3 * 46.34;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total3,2)."<br><br>";

                        break;

                    case '12279.30':
                                           
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".$arrayCambio[$sold]->getCosto()."<br><br>";
                        
                        break;

                    case '987426':
                        
                        $subtotal5 = $arrayCambio[$sold]->getCosto() / 3726.04;
                        $total5= $subtotal5 * 46.34;
                        echo "<br>Codigo del producto: " . $arrayCambio[$sold]->getCodigo() . "<br>Precio en ". get_called_class() ." ".round($total5,2)."<br><br>";
                    
                        break;
                }                            
            } 
        }
    }