<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/Tarea-Filtrado.php">
        <label for="" class="form-label">NIF/CIF:</label><input type="text" name="identificacion">
        <?= $errores->ErrorFormateado("identificacion")?><br>
        <label for="" class="form-label">Nombre:</label> <input type="text" name="nombre">
        <?= $errores->ErrorFormateado("nombre")?><br>
        <label for="" class="form-label">Apellido: </label><input type="text" name="apellido">
        <?= $errores->ErrorFormateado("apellido")?><br>
        <label for="" class="form-label">Telefono: </label><input type="text" name="telefono">
        <?= $errores->ErrorFormateado("telefono")?><br>
        <label for="" class="form-label">Correo: </label><input type="text" name="correo">
        <?= $errores->ErrorFormateado("correo")?><br>
        <label for="" class="form-label">Poblacion: </label><input type="text" name="poblacion">
        <?= $errores->ErrorFormateado("poblacion")?><br>
        <label for="" class="form-label">Codigo postal:</label> <input type="text" name="codigo">
        <?= $errores->ErrorFormateado("codigo")?><br>
        <!-- <label for="" class="form-label">Provincia:</label><br> --> 
        <label for="" class="form-label">Estado:</label> <input type="radio" name="estado" value="B"> Esperando ser aprobada 
                <input type="radio" name="estado" value="P"> Pendiente 
                <input type="radio" name="estado" value="R"> Realizada 
                <input type="radio" name="estado" value="C"> Cancelada 
                
        <?= $errores->ErrorFormateado("estado")?><br>
        <label for="" class="form-label">Fecha de creacion de la tarea: </label><input type="date" name="inicio" value="<?php echo date("Y-m-d")?>">
        <?= $errores->ErrorFormateado("inicio")?><br>
        <label for="" class="form-label">Operario encargado: </label><input type="text" name="operario">
        <?= $errores->ErrorFormateado("operario")?><br>
        <label for="" class="form-label">Fecha de realizacion de la tarea:</label> <input type="date" name="final">
        <?= $errores->ErrorFormateado("final")?><br>
        <label for="" class="form-label">Anotaciones anteriores: </label><textarea name="anterior" cols="30" rows="10"></textarea>
        <?= $errores->ErrorFormateado("anterior")?><br>
        <label for="" class="form-label">Anotaciones posteriores: </label><textarea name="posterior" cols="30" rows="10"></textarea>
        <?= $errores->ErrorFormateado("posterior")?><br>
        <label for="" class="form-label">Fichero resumen: </label><input type="text" name="resumen">
        <?= $errores->ErrorFormateado("resumen")?><br>
        <label for="" class="form-label">Adjuntar fotos: </label><input type="text" name="fotos"><br>
        <input type="submit" class="btn" name="btn" value="Añadir"> <br>
      </form>

      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NIF/CIF:</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</html>