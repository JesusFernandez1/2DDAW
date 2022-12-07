<html>

<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>Base de Datos</title>
</head>

<body>
   <h1>Ver datos de las tareas</h1>
   <table border="1">
      <tr>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>NIF/CIF</th>
         <th>poblacion</th>
         <th>codigo_postal</th>
         <th>provincia</th>
         <th>fecha_creacion</th>
         <th>telefono</th>
      </tr>
      @foreach ($tareas as $tarea)
         <tr>
            <td>{{$tarea['NIF/CIF']}}</td>
            <td>{{$tarea['nombre']}}</td>
            <td>{{$tarea['apellido']}}</td>
            <td>{{$tarea['poblacion']}}</td>
            <td>{{$tarea['codigo_postal']}}</td>
            <td>{{$tarea['provincia']}}</td>
            <td>{{$tarea['fecha_creacion']}}</td>
            <td>{{$tarea['telefono']}}</td>
         </tr>
      @endforeach
   </table>
</body>

</html>