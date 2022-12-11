<html>

<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>Base de Datos</title>
</head>

<body>
   @extends('base_usuarios')

   @section('eliminarUsuario')

   <h1>¿Estas seguro de eliminar el usuario?</h1>

   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($usuarios as $usuario)
         <tr>
            <td>{{$usuario['nombre']}}</td>
            <td>{{$usuario['apellido']}}</td>
            <td>{{$usuario['correo']}}</td>
            <td>{{$usuario['tipo']}}</td>
            <td><a href="index.php?controller=login&action=borrarUsuario&id={{$usuario['usuario_id']}}" class="btn btn-primary btn-sm" role="button">Si</a> <a href="index.php?controller=login&action=login" class="btn btn-primary btn-sm" role="button">No</a>
         </tr>
         @endforeach
      </tbody>
   </table>
   @endsection
</body>
</html>