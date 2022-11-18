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

$limite=1000;
$numero1=5;
$numero2=3;
$numero3=7;
for($i=1;$i<$limite;$i++){
	if(($i%$numero1==0) || ($i%$numero2==0) || ($i%$numero3==0)){
	
        if ($i%10==0) {
        
            echo '<br>';
    
        }
    
        echo $i . '<br>';

	}
}

?>

</body>
</html>