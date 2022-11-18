<?php

if (is_uploaded_file ($_FILES['fichero_usuario']['tmp_name'])) { //comprobamos que se haya subido algun archivo
        $nombreDirectorio = __DIR__; //__DIR__ nos da la direccion del script
        $nombreFichero = $_FILES['fichero_usuario']['name'];
        $nombre = $nombreDirectorio . ' / ' . $nombreFichero;
        move_uploaded_file ($_FILES['fichero_usuario']['tmp_name'], $nombre); //movemos dicho archivo a la direccion indicada
        readfile($nombre); //mostramos el contenido del archivo por pantalla
} else
 print ("No se ha podido subir el fichero\n");

?>