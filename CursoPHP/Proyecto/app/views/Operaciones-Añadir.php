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
        <label for="" class="form-label">CIF:</label><input type="text" name="identificacion"><br>
        <label for="" class="form-label">Nombre:</label> <input type="text" name="nombre"><br>
        <label for="" class="form-label">Apellido: </label><input type="text" name="apellido"><br>
        <label for="" class="form-label">Telefono: </label><input type="text" name="telefono"><br>
        <label for="" class="form-label">Correo: </label><input type="text" name="correo"><br>
        <label for="" class="form-label">Poblacion: </label><input type="text" name="poblacion"><br>
        <label for="" class="form-label">Codigo postal:</label> <input type="text" name="codigo"><br>
        <label for="" class="form-label">Provincia:</label> <?=CreaSelect('provincias','codigo','nombre')?><br>
        <label for="" class="form-label">Estado:</label> <input type="radio" name="estado" value="B"> Esperando ser aprobada 
                <input type="radio" name="estado" value="P"> Pendiente 
                <input type="radio" name="estado" value="R"> Realizada 
                <input type="radio" name="estado" value="C"> Cancelada 
                <br>
        <label for="" class="form-label">Fecha de creacion de la tarea: </label><input type="date" name="inicio"><br>
        <label for="" class="form-label">Operario encargado: </label><input type="text" name="operario"><br>
        <label for="" class="form-label">Fecha de realizacion de la tarea:</label> <input type="date" name="final"><br>
        <label for="" class="form-label">Anotaciones anteriores: </label><input type="text" name="anterior"><br>
        <label for="" class="form-label">Anotaciones posteriores: </label><input type="text" name="posterior"><br>
        <label for="" class="form-label">Fichero resumen: </label><input type="text" name="resumen"><br>
        <label for="" class="form-label">Adjuntar fotos: </label><input type="text" name="fotos"><br>
        <input type="submit" value="Enviar">
      </form>
</body>
</html>