<?php

try {
    include('conex.php');
    $conex = Conecta();
    $nombre = $_GET["comunidades"];

    $rs = mysqli_query(
        $conex,
        "SELECT id FROM tbl_comunidadesautonomas
        WHERE nombre='$nombre'"
    );

    while ($reg = mysqli_fetch_row($rs)) {

    $rs2 = mysqli_query(
        $conex,
        "SELECT p.nombre FROM tbl_provincias p WHERE p.comunidad_id=$reg[0]"
    );

    while ($reg2 = mysqli_fetch_row($rs2)) {
        echo $reg2[0] . "<br>";
    }
}
} catch (\Exception $e) {
    echo $e->getMessage();
} finally {
    mysqli_close($conex); //$conex=$mysqli
}
