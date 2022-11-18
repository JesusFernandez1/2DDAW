<?php

try {
    include('conex.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT COUNT(*), c.nombre FROM tbl_provincias p, tbl_comunidadesautonomas c
                WHERE comunidad_id = c.id GROUP BY comunidad_id");

    echo "<p>Nº de registros:". mysqli_num_rows($rs);
    echo "<pre>";
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0] . " - " . $reg[1];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqli
}