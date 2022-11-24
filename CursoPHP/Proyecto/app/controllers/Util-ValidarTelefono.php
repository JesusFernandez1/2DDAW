<?php

function validarTelefono($numero){
    $reg = "#^\(?\d{2}\)?[\s\.-]?\d{4}[\s\.-]?\d{4}$#";
    return preg_match($reg, $numero);
  }