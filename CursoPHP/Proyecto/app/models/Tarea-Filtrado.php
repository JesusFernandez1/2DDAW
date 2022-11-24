<?php

if ($GET) {

if(validDniCifNie($_GET("identificacion"))){
    
  include("Operaciones-Añadir.php");

} else if(validarTelefono($_GET("telefono"))){
  
  include("Operaciones-Añadir.php");

 } else if(validarEmail($_GET("correo"))){

  include("Operaciones-Añadir.php");

 } else {

    include("Tarea-Añadir.php");

 }

} else {

  include("Operaciones-Añadir.php");
  
}