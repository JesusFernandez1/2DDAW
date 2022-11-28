<?php

if ($_GET) {

  include("Util-FechaValida.php");
  include("Util-ValidarCorreo.php");
  include("Util-ValidarDNI.php");
  include("Util-ValidarTelefono.php");

  if (validDniCifNie($_GET["identificacion"])) {

  } else if (validarTelefono($_GET["telefono"])) {

  } else if (validarEmail($_GET["correo"])) {

  } else if (comprobar_fecha($_GET["inicio"])) {

  } else {
    include("../models/Tarea-A%C3%B1adir.php");
  }
} else {
  include("../views/Operaciones-A%C3%B1adir.php");
}
