<?php

try {
    include('\models\conexion.php');
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
    $creacion=date('d-m-Y');
    $operario=$_GET["operario"];
    $final=$_GET["final"];
    $anterior=$_GET["anterior"];
    $posterior=$_GET["posterior"];

    $rs = mysqli_query(
        $conex, "INSERT INTO 'tareas' ('NIF/CIF', 'nombre', 'apellido', 'telefono', 'correo', 'poblacion', 'codigo_postal', 'provincia', 'estado_tarea', 'fecha_creacion', 'operario_encargado', 'fecha_final', 'anotacion_inicio', anotacion_final) VALUES
        ('$identificacion', '$nombre', '$apellido', '$telefono', '$correo', '$poblacion', '$codigo', '$provincia', '$estado', '$creacion', '$operario', '$final', '$anterior', '$posterior');");

    echo "Tarea introducida con exito!";

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}