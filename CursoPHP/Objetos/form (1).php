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
function VP($nombreCampo, $valorPorDefecto='')
{
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
    else
        return $valorPorDefecto;
}

function VerError($campo) {
    global $errores;
    if (isset($errores[$campo])) {
        return '<span style="color:red">'.$errores[$campo].'</span>';
    }
    else {
        return '';
    }
}

$errores=[];

if ($_POST) {   
    // Han enviado datos
    // Filtro datos
    if (filter_input(INPUT_POST, 'nombre')=='') {
        $errores['nombre']='Hay error en el campo nombre';
    }
    $num=filter_input(INPUT_POST, 'num');
    if ($num<=0 || $num>=5) {
        $errores['num']='El número entre 1 y 5';
    }    

    if (filter_input(INPUT_POST, 'opcion')=='') {
        $errores['opcion']='Hay que seleccionar un valor';
    }

    if ($errores /* count($errores)>0*/ ) {
        include('form.vista.php');
    }
    else {
        include('form.resu.php');
    }
}
else {
    // Es la primera vez
    include('form.vista.php');
}
?> 
</body>
</html>