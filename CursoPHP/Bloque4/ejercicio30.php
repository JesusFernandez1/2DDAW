<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border=1>

<tr>

  <th>Nombre</th>

  <th>Apellido</th>

  <th>Sexo</th>

  <th>Curso</th>

  <th>Fecha</th>

</tr>

<tr>

    <td><?php echo $_GET["nombre"] ?></td>

    <td><?php echo $_GET["apellido"] ?></td>

    <td><?php echo $_GET["sexo"] ?></td>

    <td><?php echo $_GET["cursos"] ?></td>

    <td><?php echo $_GET["fecha"] ?></td>

</tr>


</table>

</body>
</html>

