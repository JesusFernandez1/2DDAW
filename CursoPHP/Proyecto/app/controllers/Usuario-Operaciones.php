
<?php

if ($_GET["operacionUsuario"]==1) {

    include("Usuario-Añadir.php");

} elseif ($_GET["operacionUsuario"]==2) {

    include("Usuario-Eliminar.php");

} elseif ($_GET["operacionUsuario"]==3) {

    include("Usuario-Editar.php");

} elseif ($_GET["operacionUsuario"]==4) {

    include("Usuario-Ver.php");

}