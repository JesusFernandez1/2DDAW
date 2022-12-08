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
      <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($usuario['nombre']); ?></td>
            <td><?php echo e($usuario['apellido']); ?></td>
            <td><?php echo e($usuario['correo']); ?></td>
            <td><?php echo e($usuario['tipo']); ?></td>
         </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
</body>

</html><?php /**PATH C:\xampp\htdocs\2DAW\CursoPHP\AProyecto\app\views/usuarios_mostrar.blade.php ENDPATH**/ ?>