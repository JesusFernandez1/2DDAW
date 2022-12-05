<?php

if ($_GET) {

    if (empty($_GET["nombre"])) {


    } elseif (empty($_GET["apellido"])) {
        

    } elseif (empty($_GET["sexo"])) {
       

    } elseif (empty($_GET["cursos"])) {
        
        
    } elseif (empty($_GET["fecha"])) {
        
        
    } else {
        include("ejercicio31.php");
    }

} else {
    include("ejercicio31.html");
}

?>