<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="operaciones.php">
        ¿Que operacion desea realizar?: <br>
        Operacion: <select name="operacion">
            <option value="0">Ver lista de tareas</option> <!-- adm y ope -->
            <option value="1">Añadir una nueva tarea</option> <!-- adm -->
            <option value="2">Modificar datos de una tarea</option> <!-- adm -->
            <option value="3">Eliminar tarea</option> <!-- adm y ope -->
            <option value="4">Cambiar estado de una tarea</option> <!-- adm y ope -->
            <option value="5">Completar una tarea</option> <!-- ope -->
            <option value="6">Buscar una tarea concreta</option> <!-- adm y ope -->
        </select>
        <input type="submit" value="Enviar">
      </form>
</body>
</html>