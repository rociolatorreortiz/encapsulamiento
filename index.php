<?php

include 'producto.php';

$jabon = new producto("jabon", "jb", 2000, 20);
$Arroz = new producto("Arroz", "az", 1600, 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Su producto es: ". $jabon->getNombre(). "<br>";
        echo "La cantidad es: ". $jabon->getCantidad(). "<br>";
        echo "El valor es: ". $jabon->getValor(). "<br>";

        echo "Su producto es: ". $Arroz->getNombre(). "<br>";
        echo "La cantidad es: ". $Arroz->getCantidad(). "<br>";
        echo "El valor es: ". $Arroz->getValor();

    ?>
    
</body>
</html>