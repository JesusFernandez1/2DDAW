<?php

$fecha = new DateTime();
$fecha2 = new DateTime();

$fecha2 -> setTime(23,0);
$diferencia = $fecha ->diff($fecha2);

echo $diferencia->h . ":" . $diferencia->i . ":" . $diferencia->s . "<br>";

?>

<?php

$fecha4 = new DateTime("+5 days");

echo "Fecha dentro de 5 dias: " . $fecha4 ->format("d-m-Y") . "<br>";

?>

<?php

$fecha5 = new DateTime("-5 days");

echo "Fecha hace de 5 dias: " . $fecha5 ->format("d-m-Y") . "<br>";

?>

<?php

$fecha6 = new DateTime();
$fecha7 = new DateTime(date("d-m-Y"));

$fecha6 ->setDate(1995,10,19);
$diferencia3 = $fecha6 ->diff($fecha7);

echo $diferencia3->y . "<br>";

?>



