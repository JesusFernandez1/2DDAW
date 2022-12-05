<?php
//Llamada al modelo
require_once("models/Tareas.php");
$per=new tareas_model();
$datos=$per->get_tareaPendiente();
 
//Llamada a la vista
require_once("views/Mostrar.php");
?>
