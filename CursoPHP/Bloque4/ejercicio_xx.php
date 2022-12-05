
<?php

$tabla = 10;

$numero = $_GET["numero"];

value = "<? = $GET['num']?>"

if (is_numeric($numero) && ($numero >= 1 && $numero <= 10)) {
    
    for ($i=1; $i <= $tabla; $i++) { 
    
        echo $numero * $i . '<br>';
    
    }

} else {
    echo "El valor " . $numero . " es erroneo";
    echo '<a href="ejercicio_xx.html">Volver</a>';
}


?>