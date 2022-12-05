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

$numero_aleatorio = rand(1,10);

$a = 0;

while ($a <= 10) {
    
    echo $numero_aleatorio * $a . '<br>';

    $a++;

}



?>

</body>
</html>