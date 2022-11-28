<?php

try {
    include('conexion.php');
    $conex=Conecta();
    $idTarea = $_GET["tarea_id"];

    $rs = mysqli_query(
        $conex, "DELETE FROM tareas WHERE tarea_id='".$idTarea."'");

    echo "Tarea eliminada con exito!";

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}