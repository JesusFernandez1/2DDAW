<?php

if ($_GET) {

  include("Util-ValidarCodigo.php");
  include("Util-FechaValida.php");
  include("Util-ValidarCorreo.php");
  include("Util-ValidarDNI.php");
  include("Util-ValidarTelefono.php");
  $errores = new GestorErrores('<span style="color. red;">*','*</span>');

  if (empty($_GET["identificacion"])) {

    $errores ->AnotaError('identificacion','El DNI no puede estar vacio');
  } else if (!validDniCifNie($_GET["identificacion"])) {

  }

  if (empty($_GET["telefono"])) {

    $errores ->AnotaError('telefono','El DNI no puede estar vacio');
  } else if (!validarTelefono($_GET["telefono"])) {

  }

  if (empty($_GET["poblacion"])) {

    $errores ->AnotaError('poblacion','El DNI no puede estar vacio');
  }

  if (empty($_GET["nombre"])) {

    $errores ->AnotaError('nombre','El DNI no puede estar vacio');
  }

  if (empty($_GET["apellido"])) {

    $errores ->AnotaError('apellido','El DNI no puede estar vacio');
  }

  if (empty($_GET["estado"])) {

    $errores ->AnotaError('estado','El DNI no puede estar vacio');
  }

  if (empty($_GET["codigo"])) {

    $errores ->AnotaError('codigo','El DNI no puede estar vacio');
  } else if (!comprobarCodigo($_GET["codigo"])) {

  }

  if (!comprobar_fecha($_GET["final"])) {

  }
  if (empty($errores)) {
    include("../models/Tarea-A%C3%B1adir.php");
  } else {
    include("../views/Operaciones-A%C3%B1adir.php");
  }
} else {
  include("../views/Operaciones-A%C3%B1adir.php");
}
