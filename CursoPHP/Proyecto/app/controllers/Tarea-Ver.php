<?php

//include("operacionesTarea");

try {
    include('..\models\conexion.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT *  FROM tareas ORDER BY fecha_creacion DESC");

    echo "<p>Nº de tareas:". mysqli_num_rows($rs);
    echo "<pre>";
    
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}