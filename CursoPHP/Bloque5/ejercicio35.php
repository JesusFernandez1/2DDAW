<?php

$variable1 = $_GET["operador1"];
$variable2 = $_GET["operador2"];

if (isset($_GET["sumar"])) {
    
    $_GET["resultado"] = $variable1 + $variable2;

} elseif (isset($_GET["restar"])) {

    $_GET["resultado"] = $variable1 - $variable2;

} elseif (isset($_GET["multiplicar"])) {

    $_GET["resultado"] = $variable1 * $variable2;

} else {
    $_GET["resultado"] = $variable1 / $variable2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ejercicio35.php">
        Operador1: <input type="text" name="operador1" value=" <?php echo $variable1; ?> "><br>
        Operador2: <input type="text" name="operador2" value=" <?php echo $variable2; ?> "><br>
        Resultado: <input type="text" name="resultado" readonly value=" <?php echo $_GET["resultado"]; ?> "><br>
        <input id="sumar" name="sumar" type="submit" value="Sumar"/>
        <input id="restar" name="restar" type="submit" value="Restar"/>
        <input id="multiplicar" name="multiplicar" type="submit" value="Multiplicar"/>
        <input id="dividir" name="dividir" type="submit" value="Dividir"/>
      </form>

</body>
</html>