<?php

try {
    include('conex.php');
    $conex=Conecta();

    $rs = mysqli_query(
        $conex, "SELECT nombre, cod  FROM tbl_provincias 
        where nombre like 'b%'");

    echo "<p>Nº de registros:". mysqli_num_rows($rs);
    echo "<pre>";
    /*for($n=0; $n<mysqli_num_rows($rs); $n++) {
        $reg = mysqli_fetch_row($rs);*/
    while($reg = mysqli_fetch_row($rs)) {
        //var_dump($reg);
        echo "<p>".$reg[0].'-'.$reg[1];
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}
