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

function EsPrimo($numero)
{
    if(!is_numeric($numero))
    
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            return false;

        }

    }

    return true;
}


for ($i=1; $i <= 100; $i++) { 
    
    if (EsPrimo($i)) {
        
        echo $i . '<br>';

    }

}

?>

</body>
</html>