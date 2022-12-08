<html>

<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>Base de Datos</title>
</head>

<body>
   <h1>Ver datos de las usuarios</h1>
   <table border="1">
      <tr>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Correo</th>
         <th>Tipo</th>
      </tr>
      @foreach ($usuarios as $usuario)
         <tr>
            <td>{{$usuario['nombre']}}</td>
            <td>{{$usuario['apellido']}}</td>
            <td>{{$usuario['correo']}}</td>
            <td>{{$usuario['tipo']}}</td>
         </tr>
      @endforeach
   </table>
</body>

</html>