
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
</head>
<body>
    <center>
    <h1>Bienvenido</h1>
        <h2>Listado de Transacciones</h2>
        <?php
            include "LectorJSON.php";
            $read = new LectorJson();
            $read -> Leer();
        ?> 
    <p>Elija un tipo de moneda para ver el listado de transacciones en el la moneda solicitada</p>

    <form action="documento.php" method="post">
        <select name="moneda" id="moneda">
            <option diseable selected>Seleccionar Moneda</option>
            <option value="dolar">Dolar</option>
            <option value="euro">Euro</option>
            <option value="pesoA">Peso Argentino</option>
            <option value="bolivar">Bolivar</option>
            <option value="pesoC">Peso Colombiano</option>
        </select>
        <input type="submit">
    </form>
    </center>
</body>
</html>