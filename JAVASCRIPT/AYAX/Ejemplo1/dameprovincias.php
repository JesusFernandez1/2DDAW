<?php

try {
    include('conex.php');
    $conex=Conecta();

    $query = mysqli_query(
        $conex, "SELECT nombre, cod  FROM tbl_provincias");

        echo '<table class="table table-striped">';
        echo '<tr><th>ID</th><td>provincias</td></tr>';
   
    while($row = mysqli_fetch_assoc($query)) {
        
        echo "<tr><td>".$row['cod']."</td><td>".$row['nombre']."</td></tr></td>";
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}
finally {
    mysqli_close($conex); //$conex=$mysqly
}