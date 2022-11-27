<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Tarea-Filtrado.php">
        NIF/CIF: <input type="text" name="identificacion"><br>
        Nombre: <input type="text" name="nombre"><br>
        Apellido: <input type="text" name="apellido"><br>
        Telefono: <input type="text" name="telefono"><br>
        Correo: <input type="text" name="correo"><br>
        Poblacion: <input type="text" name="poblacion"><br>
        Codigo postal: <input type="text" name="codigo"><br>
        Provincia: <select name="provincia">
            <option></option>
        </select><br>
        Estado: <input type="radio" name="estado" value="B"> Esperando ser aprobada 
                <input type="radio" name="estado" value="P"> Pendiente 
                <input type="radio" name="estado" value="R"> Realizada 
                <input type="radio" name="estado" value="C"> Cancelada 
                <br>
        Fecha de creacion de la tarea: <input type="date" name="inicio"><br>
        Operario encargado: <input type="text" name="operario"><br>
        Fecha de realizacion de la tarea: <input type="date" name="final"><br>
        Anotaciones anteriores: <input type="text" name="anterior"><br>
        Anotaciones posteriores: <input type="text" name="posterior"><br>
        Fichero resumen: <input type="text" name="resumen"><br>
        Adjuntar fotos: <input type="text" name="fotos"><br>
        <input type="submit" value="Enviar">
      </form>
</body>
</html>