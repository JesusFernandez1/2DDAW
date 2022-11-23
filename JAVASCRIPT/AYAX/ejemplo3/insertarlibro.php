<?php

try {
    include('conex.php');
    $conex=Conecta();
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $paginas = $_POST['paginas'];
    $anno = $_POST['anno'];

    $query = mysqli_query(
        $conex, "INSERT INTO 'libros' ('titulo', 'autor', 'editorial', 'paginas', 'anno') VALUES
        ('".$titulo."','".$autor."','".$editorial."',".$paginas.",".$anno.")");

        echo $query;

}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}