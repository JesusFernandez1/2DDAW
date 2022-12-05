<?php

try {
    include('conex.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT COUNT(*)  FROM tbl_provincias GROUP BY comunidad_id");

    echo "<p>Nº de registros:". mysqli_num_rows($rs);
    echo "<pre>";
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqli
}