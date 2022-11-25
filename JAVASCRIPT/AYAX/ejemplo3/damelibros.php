<?php
$username = "root";
$password = "";
$database = "libreria";
$mysqli = new mysqli("localhost", $username, $password, $database);
mysqli_set_charset($mysqli,'UTF8');
$query = "SELECT * FROM libros";
$libros = [];
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $libros[] = array('codigo'=> $row['idlibros'], 'titulo'=> $row['titulo'],'autor'=>$row['autor'],'editorial'=>$row['editorial'],'paginas'=>$row['paginas'],'anno'=>$row['anno']);
    }
$libros2 = json_encode($libros);
$result->free();
echo $libros2;
}