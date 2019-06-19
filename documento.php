<center>
<?php
    include_once "monedas/dolar.php";
    include_once "monedas/euro.php";
    include_once "monedas/pesoARS.php";
    include_once "monedas/bolivares.php";
    include_once "monedas/pesoCOP.php";

            $money = $_POST["moneda"];

            switch ($money) {
                case 'dolar':
                    
                    $objeto = new Dolar; 
                    $objeto-> ConvertirUSD();

                    break;
                
                case 'euro':
                    
                    $objeto1 = new Euros;
                    $objeto1-> ConvertirEUR();

                    break;
                
                case 'pesoA':

                    $objeto2 = new PesosARS;
                    $objeto2-> ConvertirARS();

                    break;
                
                case 'bolivar':
                    
                    $objeto3 = new Bolivares;
                    $objeto3-> ConvertirBSS();

                    break;

                case 'pesoC':
                    
                    $objeto4 = new PesosCOP;
                    $objeto4-> ConvertirCOP();
                    break;
            }
?>
</center>