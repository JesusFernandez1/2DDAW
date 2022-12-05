<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function Muestra_Fecha($dia, $mes, $año){
    $fecha = strtotime($mes . "/" . $dia . "/" . $año);
    $d = date('l', $fecha);

include 'funciones.php';

echo $d . " " . $dia . " de " . nombre_mes($mes) . " del " . $año;

}

echo Muestra_Fecha(20,10,2000);



?>

</body>
</html>