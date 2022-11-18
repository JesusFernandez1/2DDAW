<?php
$conex=mysqli_connect('localhost', 'root', '', 'provincias');

if (! $conex) {
	die("<p>ERROR EN la conexión</p>");
}