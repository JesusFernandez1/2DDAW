<?php

try {
    include('..\models\conexion.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT *  FROM tareas");

    echo "<p>Nº de tareas:". mysqli_num_rows($rs);
    echo "<pre>";
    
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0].'-'.$reg[1];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}