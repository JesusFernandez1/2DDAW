<?php

try {
    include('\models\conexion.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "INSERT INTO 'tareas' ('NIF/CIF', 'nombre', 'apellido', 'telefono', 'correo', 'poblacion', 'codigo_postal', 'provincia', 'estado_tarea', 'fecha_creacion', 'fecha_final', 'anotacion_inicio', anotacion_final) VALUES
        (/*valores a introducir por campo*/),
        (/*valores a introducir por campo*/);");

    echo "Tarea introducida con exito!";

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}