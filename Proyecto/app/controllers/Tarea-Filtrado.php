<?php

if ($_GET) {

  include("Util-ValidarCodigo.php");
  include("Util-FechaValida.php");
  include("Util-ValidarCorreo.php");
  include("Util-ValidarDNI.php");
  include("Util-ValidarTelefono.php");
  include("../models/GestorErrores.php");
  $errores = new GestorErrores('<span style="color. red;">*', '*</span>');
  

  if (empty($_GET["identificacion"])) {

    $errores->AnotaError('identificacion', 'El DNI no puede estar vacio');

  } else if (!validDniCifNie($_GET["identificacion"])) {

    $errores->AnotaError('identificacion', 'El DNI introducido no es valido');
  }

  if (empty($_GET["nombre"])) {

    $errores->AnotaError('nombre', 'El nombre no puede estar vacio');
  }

  if (empty($_GET["apellido"])) {

    $errores->AnotaError('apellido', 'El apellido no puede estar vacio');
  }

  if (empty($_GET["correo"])) {

    $errores->AnotaError('correo', 'El nombre no puede estar vacio');

  } else if (!validarEmail($_GET["correo"])) {

    $errores->AnotaError('correo', 'El formato del correo introducido no es valido');
  }

  if (empty($_GET["telefono"])) {

    $errores->AnotaError('telefono', 'El DNI no puede estar vacio');

  } else if (!validarTelefono($_GET["telefono"])) {

    $errores->AnotaError('telefono', 'El telefono introducido no tiene un formato aceptado');
  }

  if (empty($_GET["poblacion"])) {

    $errores->AnotaError('poblacion', 'El DNI no puede estar vacio');
  }

  if (empty($_GET["estado"])) {

    $errores->AnotaError('estado', 'El estado no puede estar vacio');
  }

  if (empty($_GET["codigo"])) {

    $errores->AnotaError('codigo', 'El codigo no puede estar vacio');

  } else if (!comprobarCodigo($_GET["codigo"])) {

    $errores->AnotaError('codigo', 'El codigo no tiene un formato valido');
  }
  if (!comprobar_fecha_actual($_GET['inicio'])) {

    $errores->AnotaError('inicio', 'La fecha de creacion no puede modificarse');
  }
  if (empty($_GET["final"])) {

    $errores->AnotaError('final', 'La fecha no puede estar vacia');

  } else if (!comprobar_fecha($_GET["final"])) {

    $errores->AnotaError('final', 'La fecha de finalizacion no puede ser inferior a la acutal');

  }
  if ($errores->HayErrores() == 0) {
    include("../models/Tarea-Añadir.php");
  } else {
    include("../views/Operaciones-Añadir.php");
  }
} else {
  include("../views/Operaciones-Añadir.php");
}
