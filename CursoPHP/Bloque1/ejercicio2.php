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

$numero=1;

for ($tabla=1; $tabla <= 10 ; $tabla++) { 

    while ($numero <= 10) {
        
        echo $tabla * $numero . '<br>';

        $numero++;

    }

    $numero = 1;

}
   

?>
</body>
</html>