<?php
$username = "root";
$password = "";
$database = "libreria";
$mysqli = new mysqli("localhost", $username, $password, $database);
mysqli_set_charset($mysqli,'UTF8');
$query = "SELECT * FROM libros";
$libros = "";
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $libros = $libros.$row['idtable1'].",".$row['titulo'].",".$row['autor'].",".$row['editorial'].",".$row['paginas'].",".$row['anno'].",";
    }

$result->free();
echo $libros;
}