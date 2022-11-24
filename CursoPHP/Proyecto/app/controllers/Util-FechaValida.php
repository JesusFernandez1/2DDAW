<?php

function comprobar_fecha($date){

    if (date("d-m-Y") >= date("$date")) {
        return true;
    }

    return false;
  }