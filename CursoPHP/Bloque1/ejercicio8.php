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

$contador = 0;
$tiempo = time()+5;
$i = 1;

while (time() < $tiempo) {
    
    if ($i%5==0) {
        
        echo $i . " ";
        $contador++;

    }

    if ($contador%10==0) {
        
        echo '<br>';

    }

    $i++;

}

?>

</body>
</html>