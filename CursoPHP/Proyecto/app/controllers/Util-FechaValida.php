<?php

/**
 * comprobar_fecha
 *
 * @param  mixed $date
 * @return void
 */

function comprobar_fecha($date){

    if (date("d-m-Y") >= date("$date")) {
        return true;
    }

    return false;
  }