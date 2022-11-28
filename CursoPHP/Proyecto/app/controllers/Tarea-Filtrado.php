<?php

if ($_GET) {

  include("models/Util-ValidarCorreo.php");
  include("models/Util-ValidarDni.php");
  include("models/Util-ValidarTelefono.php");



} else {

  include("../Operaciones-Añadir.php");
  
}