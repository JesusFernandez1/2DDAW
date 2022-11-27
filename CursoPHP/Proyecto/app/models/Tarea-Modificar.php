<?php

try {
    include('conexion.php');
    $conex=Conecta();
    $identificacion=$_GET["identificacion"];
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $telefono=$_GET["telefono"];
    $correo=$_GET["correo"];
    $poblacion=$_GET["poblacion"];
    $codigo=$_GET["codigo"];
    $provincia=$_GET["provincia"];
    $estado=$_GET["estado"];
    $creacion=$_GET["inicio"];
    $operario=$_GET["operario"];
    $final=$_GET["final"];
    $anterior=$_GET["anterior"];
    $posterior=$_GET["posterior"];

    $rs = mysqli_query(
        $conex, "UPDATE tareas
        SET NIF/CIF=$identificacion, nombre=$nombre, apellido=$apellido, telefono=$telefono, correo=$correo, poblacion=$poblacion, codigo_postal=$codigo, provincia=$provincia, estado_tarea=$estado, fecha_creacion=$creacion, operario_encargado=$operario, fecha_final=$final,  anotacion_inicio=$anterior, anotacion_final=$posterior
        WHERE tarea_id=$_GET[tarea_id];");

    echo "Tarea introducida con exito!";

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}