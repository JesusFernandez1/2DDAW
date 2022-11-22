<?php

try {
    include('conex.php');
    $conex=Conecta();

    $query = mysqli_query(
        $conex, "SELECT *  FROM libros");

   $libro = "";
    while($row = mysqli_fetch_assoc($query)) {
        
       $libro .= $libro.$row['idlibros'].",".$row['Titulo'].",".$row['Autor'].",".$row['Editora'].",".$row['Paginas'].",".$row['Anio'].",";
    }
    echo $libro;
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}