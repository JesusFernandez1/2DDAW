<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
@extends('base')

@section('mostrarExtension')
  <form action="" class="row g-3" method="POST">
    <div class="col-md-3">
      <label for="inputEmail4" class="form-label">NIF/CIF</label>
      <input type="text" class="form-control" name="identificacion">{!!$error->ErrorFormateado("identificacion")!!}
    </div>
    <div class="col-md-3">
      <label for="inputPassword4" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">{!!$error->ErrorFormateado("nombre")!!}
    </div>
    <div class="col-3">
      <label for="inputAddress" class="form-label">Apellido</label>
      <input type="text" class="form-control" placeholder="1234 Main St" name="apellido">{!!$error->ErrorFormateado("apellido")!!}
    </div>
    <div class="col-2">
      <label for="inputAddress2" class="form-label">Telefono</label>
      <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="telefono">{!!$error->ErrorFormateado("telefono")!!}
    </div>
    <div class="col-3">
      <label for="inputAddress2" class="form-label">Descripcion</label>
      <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="descripcion">{!!$error->ErrorFormateado("descripcion")!!}
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Correo</label>
      <input type="text" class="form-control" name="correo">{!!$error->ErrorFormateado("correo")!!}
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Direccion</label>
      <input type="text" class="form-control" name="direccion">{!!$error->ErrorFormateado("direccion")!!}
    </div>
    <div class="col-md-2">
      <label for="inputCity" class="form-label">Poblacion</label>
      <input type="text" class="form-control" name="poblacion">{!!$error->ErrorFormateado("poblacion")!!}
    </div>
    <div class="col-md-2">
      <label for="inputCity" class="form-label">Codigo Postal</label>
      <input type="text" class="form-control" name="codigo">{!!$error->ErrorFormateado("codigo")!!}
    </div>
    <div class="col-md-2">
      <label for="inputState" class="form-label">Provincia</label>
      <select id="inputState" class="form-select" name="provincia">
        <option disabled selected></option>
        @foreach ($provincias as $provincia)
        <option>{{$provincia["nombre"]}}</option>
        @endforeach
      </select>
      {!!$error->ErrorFormateado("provincia")!!}
    </div>
    <div class="col-md-3">
      <label for="inputState" class="form-label">Estado</label>
      <select id="inputState" class="form-select" name="estado">
        <option disabled selected></option>
        <option>P</option>
        <option>R</option>
        <option>C</option>
        <option>B</option>
      </select>
      {!!$error->ErrorFormateado("estado")!!}
    </div>
    <div class="col-md-1">
      <label for="inputZip" class="form-label">Fecha de creacion</label>
      <input type="date" class="form-control" id="inputZip" name="inicio" value="<?php echo date("Y-m-d") ?>">{!!$error->ErrorFormateado("inicio")!!}
    </div>
    <div class="col-md-2">
      <label for="inputState" class="form-label">Operarios</label>
      <select id="inputState" class="form-select" name="operario">
        <option disabled selected></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      {!!$error->ErrorFormateado("operario")!!}
    </div>
    <div class="col-md-1">
      <label for="inputCity" class="form-label">Fecha de finalizacion</label>
      <input type="date" class="form-control" id="inputCity" name="final">{!!$error->ErrorFormateado("final")!!}
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">Anotacion inicio</label>
      <textarea type="text" class="form-control" id="inputCity" name="anterior"></textarea>
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">Anotacion final</label>
      <textarea type="text" class="form-control" id="inputCity" name="posterior"></textarea>
    </div>
    <div class="col-12">
      <input type="submit" class="btn btn-primary" value="Insert">
    </div>
  </form>
  @endsection
</body>
</html>