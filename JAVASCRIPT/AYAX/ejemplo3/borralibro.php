<?php
$username = "root";
$password = "";
$database = "libreria";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "DELETE FROM libros WHERE idlibros=".$_GET['id'];
if ($result = $mysqli->query($query)){
    echo "OK";
};


?>