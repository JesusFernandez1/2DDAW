<?php

try {
    include('conex.php');
    $conex = Conecta();

    $rs = mysqli_query(
        $conex,
        "SELECT nombre, id FROM tbl_comunidadesautonomas"
    );

    echo "<p>Nº de registros:" . mysqli_num_rows($rs);
    echo "<pre>";
    while ($reg1 = mysqli_fetch_row($rs)) {
        echo "<p>" . $reg1[0] . ": ";

        $rs2 = mysqli_query(
            $conex,
            "SELECT nombre FROM tbl_provincias
                    WHERE comunidad_id=$reg1[1]"
        );

        while ($reg2 = mysqli_fetch_row($rs2)) {
            echo $reg2[0] .  " - ";
        }
    }
} catch (\Exception $e) {
    echo $e->getMessage();
} finally {
    mysqli_close($conex); //$conex=$mysqli
}