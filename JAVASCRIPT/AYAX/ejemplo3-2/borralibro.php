<?php
$username = "root";
$password = "";
$database = "libreria";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "delete from libros where codigo=".$_GET['id'];
if ($result = $mysqli->query($query)){
    echo "OK";
};

?>