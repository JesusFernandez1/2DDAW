<?php

if (is_uploaded_file ($_FILES['fichero_usuario']['tmp_name'])) { //comprobamos que se haya subido algun archivo
        $nombreDirectorio = __DIR__; //__DIR__ nos da la direccion del script
        $nombreFichero = $_FILES['fichero_usuario']['name'];
        $nombre = $nombreDirectorio . '/' . $nombreFichero;
        move_uploaded_file ($_FILES['fichero_usuario']['tmp_name'], $nombre);
} else
 print ("No se ha podido subir el fichero\n");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
   <img src="<?=$nombreFichero?>" alt="Imagen"> 
    <a href="ejercicio40.html">click</a>
    </center>
</body>
</html>