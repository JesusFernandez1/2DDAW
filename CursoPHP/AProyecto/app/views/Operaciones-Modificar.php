<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" value="<?php echo $v['NIF/CIF'] ?>" name="identificacion"> <br>
        <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre"> <br>
        <input type="text" value="<?php echo $v['apellido'] ?>" name="apellido"> <br>
        <input type="text" value="<?php echo $v['telefono'] ?>" name="telefono"> <br>
        <input type="text" value="<?php echo $v['correo'] ?>" name="correo"> <br>
        <input type="text" value="<?php echo $v['poblacion'] ?>" name="poblacion"> <br>
        <input type="text" value="<?php echo $v['codigo_postal'] ?>" name="codigo"> <br>
        <input type="text" value="<?php echo $v['estado'] ?>" name="estado"> <br>
        <input type="text" value="<?php echo $v['fecha_inicio'] ?>" name="inicio"> <br>
        <input type="text" value="<?php echo $v['operario'] ?>" name="operario"> <br>
        <input type="text" value="<?php echo $v['fecha_final'] ?>" name="final"> <br>
        <input type="text" value="<?php echo $v['anotacion_inicio'] ?>" name="anterior"> <br>
        <input type="text" value="<?php echo $v['anotacion_final'] ?>" name="psoterior"> <br>
        <input type="text" value="<?php echo $v['resumen'] ?>" name="resumen"> <br>
        <input type="hidden" value="<?php echo $v['tarea_id'] ?>" name="id"> <br>
        <input type="submit" class="btn" name="btn" value="Update"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>