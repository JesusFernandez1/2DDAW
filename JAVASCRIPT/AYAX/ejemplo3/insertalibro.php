<?php
$username = "root";
$password = "";
$database = "libreria";
$mysqli = new mysqli("localhost", $username, $password, $database);
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$paginas = $_POST['paginas'];
$anno = $_POST['anno'];
$query = "INSERT INTO `libros` (`idlibros`, `titulo`, `autor`, `editorial`, `paginas`, `anno`) VALUES (NULL,'".$titulo."','".$autor."','".$editorial."',".$paginas.",".$anno.")";
$result = $mysqli->query($query);
?>