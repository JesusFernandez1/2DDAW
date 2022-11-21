<?php

try {
    include('conex.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT c.nombre, c.id FROM tbl_comunidadesautonomas c");

    echo "<p>Nº de registros:". mysqli_num_rows($rs);
    echo "<pre>";
    while($reg = mysqli_fetch_row($rs)) {
        echo "<p>".$reg[0] . ": ";

        $rs2 = mysqli_query(
            $conex, "SELECT p.nombre FROM tbl_provincias p WHERE p.comunidad_id=$reg[1]");

            while ($reg2 = mysqli_fetch_row($rs2)) {
                echo $reg2[0] . " ";
            }
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqli
}
