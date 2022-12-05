<?php

try {
    include('conexion.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT *  FROM tareas WHERE estado_tarea=P");

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