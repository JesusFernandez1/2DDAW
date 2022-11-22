<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Usuario-Operaciones.php">
        ¿Que operacion desea realizar?: <br>
        Operacion: <select name="operacionUsuario">
            <option></option>
            <option value="1">Añadir un usuario</option>
            <option value="2">Eliminar un usuario</option>
            <option value="3">Editar un usuario: cambiar usuario o clave</option>
            <option value="4">Listar usuarios existentes</option>
        </select>
        <input type="submit" value="Seleccionar">
      </form>
</body>
</html>