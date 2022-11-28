<?php

if ($_GET) {

  include("Util-FechaValida.php");
  include("Util-ValidarCorreo.php");
  include("Util-ValidarDNI.php");
  include("Util-ValidarTelefono.php");

  if (validDniCifNie($dni)) {

  } else if (validarTelefono($numero)) {

  } else if (validarEmail($email)) {

  } else if (comprobar_fecha($date)) {

  } else {
    include("../models/Tarea-A%C3%B1adir.php");
  }
} else {
  include("../views/Operaciones-A%C3%B1adir.php");
}
