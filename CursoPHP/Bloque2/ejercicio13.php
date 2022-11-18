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

$v1 = 7;
$v2 = 5;

function Intercambio($vi, $v2){

    global $v1;
    global $v2;

    $v1 = $v1 + $v2;

    $v2 = $v1 - $v2;

    $v1 = $v1 - $v2;

}

echo $v1 . '<br>';
echo $v2 . '<br>';

Intercambio($v1, $v2);

echo $v1 . '<br>';
echo $v2 . '<br>';


?>

</body>
</html>