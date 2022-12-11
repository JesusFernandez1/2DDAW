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
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?controller=login&action=inicio" class="nav-link px-2 text-white">Inicio</a></li>
          <li><a href="index.php?controller=login&action=verUsuarios" class="nav-link px-2 text-white">Ver usuarios</a></li>
          <li><a href="index.php?controller=login&action=crear" class="nav-link px-2 text-white">Añadir</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
         <p>Introduzca el id del usuario a buscar:</p> <input type="text" class="form-control form-control-dark" placeholder="Search..." name="buscador">
        </form>
      </div>
    </div>
  </header>

    <!-- base que esta prensente en casi todo nuestro proyecto y muestra las extensiones que hemos creado en otras vistas -->

  <?php echo $__env->yieldContent('mostrarUsuarios'); ?>

  <?php echo $__env->yieldContent('mostrarAñadirUsuario'); ?>

  <?php echo $__env->yieldContent('eliminarUsuario'); ?>

  <?php echo $__env->yieldContent('mostrarUpdateUsuario'); ?>
 

  <footer class="py-3 my-4">

        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <!--
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy</a></li>
            -->
        </ul>
        <p class="text-center text-muted">© 2022 Ghenciu Nicolae Adrian</p>
    </footer><?php /**PATH C:\xampp\htdocs\2DAW\CursoPHP\AProyecto\app\views/base_usuarios.blade.php ENDPATH**/ ?>