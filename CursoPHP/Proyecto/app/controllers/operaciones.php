<?php

if ($_GET["operacion"]==0) {

    include("Tarea-Ver.php");

} elseif ($_GET["operacion"]==1) {

    include("Tarea-Añadir.php");

} elseif ($_GET["operacion"]==2) {

    include("Tarea-Modificar.php");

} elseif ($_GET["operacion"]==3) {

    include("Tarea-Eliminar.php");

} elseif ($_GET["operacion"]==4) {

    include("Tarea-Cambiar-Estado.php");

} elseif ($_GET["operacion"]==5) {

    include("Tarea-Completar");

} elseif ($_GET["operacion"]==6) {

    include("Tarea-Buscar");

}

