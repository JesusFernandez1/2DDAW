<?php

try {
    include('conex.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT nombre, cod  FROM tbl_provincias");

    echo "<p>Nº de registros:". mysqli_num_rows($rs);
    echo "<pre>";
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0].'-'.$reg[1];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqli
}
