<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Datos de la persona</p>

    <p><?= 'Nombre: ' . $_GET["nombre"] ?></p> <!-- obtenemos el nombre y edad del enlace y los mostramos -->
    <p><?= 'Edad: ' . $_GET["edad"] ?></p>

</body>
</html>