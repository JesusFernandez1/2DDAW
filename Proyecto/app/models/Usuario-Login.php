<?php

try {
    include('conexion.php');
    $conex=Conecta();
    $nombre = $_GET['nombre'];
    $contraseña = $_GET['contraseña'];
    
    $sql="SELECT nombre, contraseña  FROM empleados 
    where nombre=$nombre AND contraseña=$contraseña";
    $rs = mysqli_query($conex, $sql);
    if (!mysqli_num_rows($rs)) {
        include("Usuario-Login.html");
    } else {
        include("Operaciones-Tarea.html");
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}

?>    