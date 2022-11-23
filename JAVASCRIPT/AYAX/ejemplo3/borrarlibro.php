<?php

try {
    include('conex.php');
    $conex=Conecta();

    $query = mysqli_query(
        $conex, "DELETE FROM libreria WHERE idlibros=".$_GET['id']);

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}
