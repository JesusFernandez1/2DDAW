<?php

try {
    include('\models\conexion.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "DELETE FROM tareas WHERE tarea_id='$_GET["tarea_id"];");

    echo "Tarea introducida con exito!";

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}