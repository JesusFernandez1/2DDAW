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

function nombre_dia($dia){
    $monthName = "";
		switch ($dia) {
		case 1:
			$monthName = "L";
			break;
		case 2:
			$monthName = "M";
			break;
		case 3:
			$monthName = "M";
			break;
		case 4:
			$monthName = "J";
			break;
		case 5:
			$monthName = "V";
			break;
		case 6:
			$monthName = "S";
			break;
		case 7:
			$monthName = "D";
			break;
		}

		return $monthName;
}

function nombre_mes($mes){
    $monthName = "";
		switch ($mes) {
		case 1:
			$monthName = "January";
			break;
		case 2:
			$monthName = "February";
			break;
		case 3:
			$monthName = "March";
			break;
		case 4:
			$monthName = "April";
			break;
		case 5:
			$monthName = "May";
			break;
		case 6:
			$monthName = "June";
			break;
		case 7:
			$monthName = "July";
			break;
		case 8:
			$monthName = "August";
			break;
		case 9:
			$monthName = "September";
			break;
		case 10:
			$monthName = "October";
			break;
		case 11:
			$monthName = "November";
			break;
		case 12:
			$monthName = "December";
		}

		return $monthName;
}

function DiaMes($num_mes){
   
		switch ($num_mes) {
		case 1:
			return 31;
			break;
		case 2:
			return 28;
			break;
		case 3:
			return 31;
			break;
		case 4:
			return 30;
			break;
		case 5:
			return 31;
			break;
		case 6:
			return 30;
			break;
		case 7:
			return 31;
			break;
		case 8:
			return 31;
			break;
		case 9:
			return 30;
			break;
		case 10:
			return 31;
			break;
		case 11:
			return 30;
			break;
		case 12:
			return 31;
		}

}

for ($año=1999; $año <= 2012; $año++) { 
    
    echo $año . '<br>';

    for ($mes=1; $mes <= 12; $mes++) { 

        echo nombre_mes($mes) . '<br>';

        for ($dia=1; $dia <= DiaMes($mes); $dia++) { 

            if ($dia%7==0) {
                
                echo $dia . '<br>';

            } elseif (($dia == 31) || ($dia == 28 && $mes == 2)) {

				echo $dia;

			}else {

				echo $dia . ', ';
			}

        }

        echo '<br>';
        echo '<br>';
        
    }

}

?>

</body>
</html>