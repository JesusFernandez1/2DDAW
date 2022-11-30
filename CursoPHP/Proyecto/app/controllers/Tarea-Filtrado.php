<?php

$errores = array();

if ($_GET) {

  include("Util-ValidarCodigo.php");
  include("Util-FechaValida.php");
  include("Util-ValidarCorreo.php");
  include("Util-ValidarDNI.php");
  include("Util-ValidarTelefono.php");

  if (empty($_GET["identificacion"])) {

    $errores[] = "Este campo no puede estar vacion";
  } else if (!validDniCifNie($_GET["identificacion"])) {

  }

  if (empty($_GET["telefono"])) {

    $errores[] = "Este campo no puede estar vacion";
  } else if (!validarTelefono($_GET["telefono"])) {

  }

  if (empty($_GET["poblacion"])) {

    $errores[] = "Este campo no puede estar vacion";
  }

  if (empty($_GET["nombre"])) {

    $errores[] = "Este campo no puede estar vacion";
  }

  if (empty($_GET["apellido"])) {

    $errores[] = "Este campo no puede estar vacion";
  }

  if (empty($_GET["estado"])) {

    $errores[] = "Este campo no puede estar vacion";
  }

  if (empty($_GET["codigo"])) {

    $errores[] = "Este campo no puede estar vacion";
  } else if (!comprobarCodigo($_GET["codigo"])) {

  }

  if (!comprobar_fecha($_GET["final"])) {
    
  }
  if (empty($errores)) {
    include("../models/Tarea-A%C3%B1adir.php");
  }
} else {
  include("../views/Operaciones-A%C3%B1adir.php");
}
