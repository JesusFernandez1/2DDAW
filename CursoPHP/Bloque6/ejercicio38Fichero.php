<?php

if (is_uploaded_file ($_FILES['fichero_usuario']['tmp_name'])) { //comprobamos que se haya subido algun archivo
        $nombreDirectorio = __DIR__; //__DIR__ nos da la direccion del script
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES['fichero_usuario']['name'];
        move_uploaded_file ($_FILES['fichero_usuario']['tmp_name'], $nombreDirectorio . ' / ' . $nombreFichero); //movemos dicho archivo a la direccion indicada
} else
 print ("No se ha podido subir el fichero\n");

?>