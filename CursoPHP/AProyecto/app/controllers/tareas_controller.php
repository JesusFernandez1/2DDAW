<?php


function ver()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    $tareas = tareas_model::get_tarea();
    echo $blade->render('tareas_mostrar', [
        'tareas' => $tareas
    ]);
}

function verPendiente()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    $tareas = tareas_model::get_tareaPendiente();

    echo $blade->render('tareas_mostrar', [
        'tareas' => $tareas
    ]);
}


function crear()
{

    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    $provincias = tareas_model::get_provincias();

    if ($_GET) {

        $error = filtradoCadena($error, $_GET['identificacion'], $_GET['nombre'], $_GET['apellido'], $_GET['telefono'], $_GET['descripcion'], $_GET['correo'], $_GET['direccion'], $_GET['poblacion'], $_GET['codigo'], $_GET['provincia'], $_GET['estado'], $_GET['inicio'], $_GET['operario'], $_GET['final']);

        $data = "'" . $_GET['identificacion'] . "','" . $_GET['nombre'] . "','" . $_GET['apellido'] . "','" . $_GET['telefono'] . "','" . $_GET['descripcion'] . "','" . $_GET['correo'] . "','" . $_GET['direccion'] . "','"
            . $_GET['poblacion'] . "','" . $_GET['codigo'] . "','" . $_GET['provincia'] . "','" . $_GET['estado'] . "','" . $_GET['inicio'] . "','" . $_GET['operario'] . "','" . $_GET['final'] . "','" . $_GET['anterior'] . "','" . $_GET['posterior'] . "'";

        if (!$error->HayErrores()) {
            tareas_model::insert_tarea($data);
            $tareas = tareas_model::get_tarea();
            echo $blade->render('tareas_mostrar', [
                'tareas' => $tareas
            ]);
        } else {
            echo $blade->render('tareas_añadir', [
                'error' => $error, 'provincias' => $provincias
            ]);
        }
    } else {
        echo $blade->render('tareas_añadir', [
            'error' => $error, 'provincias' => $provincias
        ]);
    }
}

function modificar()
{

    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    $provincias = tareas_model::get_provincias();
    if ($_GET) {

        $error = filtradoCadena($error, $_GET['identificacion'], $_GET['nombre'], $_GET['apellido'], $_GET['telefono'], $_GET['descripcion'], $_GET['correo'], $_GET['direccion'], $_GET['poblacion'], $_GET['codigo'], $_GET['provincia'], $_GET['estado'], $_GET['inicio'], $_GET['operario'], $_GET['final']);

        $data = "DNI='" . $_GET['identificacion'] . "', nombre='" . $_GET['nombre']  . "', apellido='" . $_GET['apellido']  . "', telefono='" . $_GET['telefono'] . "', descripcion='" . $_GET['descripcion']  . "', correo='" . $_GET['correo'] . "', direccion='" . $_GET['direccion'] . "', poblacion='" . $_GET['poblacion']
            . "', codigo_postal='" . $_GET['codigo'] . "', provincia='" . $_GET['provincia'] . "', estado_tarea='" . $_GET['estado']  . "', fecha_creacion='" . $_GET['inicio']  . "', operario_id='" . $_GET['operario']  . "', fecha_final='" . $_GET['final']  . "', anotacion_inicio='" . $_GET['anterior']  . "', anotacion_final='" . $_GET['posterior'] . "'";

        if (!$error->HayErrores()) {
            tareas_model::update_tarea($data);
            $tareas = tareas_model::get_tarea();
            echo $blade->render('tareas_mostrar', [
                'tareas' => $tareas
            ]);
        } else {
            echo $blade->render('tareas_modificar', [
                'error' => $error, 'provincias' => $provincias
            ]);
        }
    } else {
        echo $blade->render('tareas_modificar', [
            'error' => $error, 'provincias' => $provincias
        ]);
    }
}

function delete()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    if ($tareas === null) {
        die("No existe ninguna tarea");
    }
    $tareas = tareas_model::delete_tarea($id);
    echo $blade->render('login');
}

function filtradoCadena($error, $identificacion, $nombre, $apellido, $telefono, $descripcion, $correo, $direccion, $poblacion, $codigo, $provincia, $estado, $inicio, $operario, $final)
{
    include("app/libreria/Util-ValidarCodigo.php");
    include("app/libreria/Util-ValidarNombre.php");
    include("app/libreria/Util-FechaValida.php");
    include("app/libreria/Util-ValidarCorreo.php");
    include("app/libreria/Util-ValidarDNI.php");
    include("app/libreria/Util-ValidarTelefono.php");

    if (empty($identificacion)) {
        $error->AnotaError('identificacion', 'No has introducido un dni');
    } elseif (!validDniCifNie($identificacion)) {
        $error->AnotaError('identificacion', 'Formato no valido');
    }
    if (empty($nombre)) {
        $error->AnotaError('nombre', 'No has introducido un nombre');
    } elseif (!validarNombreApellido($nombre)) {
        $error->AnotaError('nombre', 'Formato no valido, no introduzca numeros.');
    }
    if (empty($apellido)) {
        $error->AnotaError('apellido', 'No has introducido un apellido');
    } elseif (!validarNombreApellido($apellido)) {
        $error->AnotaError('apellido', 'Formato no valido, no introduzca numeros.');
    }
    if (empty($telefono)) {
        $error->AnotaError('telefono', 'No has introducido un telefono');
    } elseif (!validarTelefono($telefono)) {
        $error->AnotaError('telefono', 'Formato no valido');
    }
    if (empty($descripcion)) {
        $error->AnotaError('descripcion', 'No has introducido una descripcion');
    }
    if (empty($correo)) {
        $error->AnotaError('correo', 'No has introducido un correo');
    } elseif (!validarEmail($correo)) {
        $error->AnotaError('correo', 'Formato no valido');
    }
    if (empty($direccion)) {
        $error->AnotaError('direccion', 'No has introducido una direccion');
    }
    if (empty($poblacion)) {
        $error->AnotaError('poblacion', 'No has introducido una poblacion');
    }
    if (empty($codigo)) {
        $error->AnotaError('codigo', 'No has introducido un codigo postal');
    } elseif (!comprobarCodigo($codigo)) {
        $error->AnotaError('codigo', 'Formato no valido');
    }
    if (empty($provincia)) {
        $error->AnotaError('provincia', 'No has seleccionado una provincia');
    }
    if (empty($estado)) {
        $error->AnotaError('estado', 'No has seleccionado un estado');
    }
    if (empty($inicio)) {
        $error->AnotaError('inicio', 'No puede ser distinta a la de hoy');
    }
    if (empty($operario)) {
        $error->AnotaError('operario', 'No has seleccionado un operario');
    }
    if (!empty($final)) {
        if (!comprobar_fecha($final)) {
            $error->AnotaError('final', 'No puede ser menor que la fecha actual');
        }
    }
    return $error;
}
