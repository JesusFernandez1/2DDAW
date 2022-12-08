<?php

function inicio()
{
    include('app/models/varios.php');
    echo $blade->render('login');
}

function ver()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    $tareas = tareas_model::get_tarea();
    if ($tareas === null) {
        die("No existe ninguna tarea");
    } else {
        //Pasamos a la vista toda la información que se desea representar
        //include("app/views/tareas_mostrar.php");
        //print_r($tareas);
        //die();
        echo $blade->render('tareas_mostrar', [
            'tareas' => $tareas
        ]);
    }
}

function verPendiente()
{
    //Llamada al modelo
    require("app/models/tareas_model.php");
    $modelo_tarea = new tareas_model();
    $tareas = $modelo_tarea->get_tareaPendiente();
    if ($tareas === null) {
        die("No existe ninguna tarea");
    }
    //Pasamos a la vista toda la información que se desea representar
    include("app/views/tareas_pendientes.php");
}

function guardar()
{

    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    $provincias = tareas_model::get_provincias();
    
    if ($_GET) {

        $identificacion = $_GET['identificacion'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $telefono = $_GET['telefono'];
        $descripcion = $_GET['descripcion'];
        $correo = $_GET['correo'];
        $direccion = $_GET['direccion'];
        $poblacion = $_GET['poblacion'];
        $codigo = $_GET['codigo'];
        $provincia = $_GET['provincia'];
        $estado = $_GET['estado'];
        $inicio = $_GET['inicio'];
        $operario = $_GET['operario'];
        $final = $_GET['final'];
        $anterior = $_GET['anterior'];
        $posterior = $_GET['posterior'];

        $error = filtradoCadena($error, $identificacion, $nombre, $apellido, $telefono, $descripcion, $correo, $direccion, $poblacion, $codigo, $provincia, $estado, $inicio, $operario, $final);

        $data = "'" . $identificacion . "','" . $nombre . "','" . $apellido . "','" . $telefono . "','" . $descripcion . "','" . $correo . "','" . $direccion . "','"
            . $poblacion . "','" . $codigo . "','" . $provincia . "','" . $estado . "','" . $inicio . "','" . $operario . "','" . $final . "','" . $anterior . "','" . $posterior . "'";

        if (!$error->HayErrores()) {
            $tareas = tareas_model::insert_tarea($data);
            echo $blade->render('tareas_añadir', [
                'error' => $error, 'provincias' => $provincias
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

function editar()
{
    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    $id = $_GET['id'];
    $tareas = tareas_model::getOnetarea($id);
    require_once("views/Operaciones-Modificar.php");
}

function update()
{

    include('app/models/varios.php');
    require("app/models/tareas_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_GET) {

        $identificacion = $_GET['identificacion'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $telefono = $_GET['telefono'];
        $descripcion = $_GET['descripcion'];
        $correo = $_GET['correo'];
        $direccion = $_GET['direccion'];
        $poblacion = $_GET['poblacion'];
        $codigo = $_GET['codigo'];
        $provincia = $_GET['provincia'];
        $estado = $_GET['estado'];
        $inicio = $_GET['inicio'];
        $operario = $_GET['operario'];
        $final = $_GET['final'];
        $anterior = $_GET['anterior'];
        $posterior = $_GET['posterior'];

        $error = filtradoCadena($error, $identificacion, $nombre, $apellido, $telefono, $descripcion, $correo, $direccion, $poblacion, $codigo, $provincia, $estado, $inicio, $operario, $final);

        $data = " NIF/CIF='" . $identificacion . "',nombre='" . $nombre  . "',apellido='" . $apellido  . "',telefono='" . $telefono . "',descripcion='" . $descripcion  . "',correo='" . $correo . "',direccion='" . $direccion . "',poblacion='" . $poblacion
            . "',codigo_postal='" . $codigo . "',provincia='" . $provincia . "',estado_tarea='" . $estado  . "',fecha_inicio='" . $inicio  . "',operario='" . $operario  . "',fecha_final='" . $final  . "',anotacion_inicio='" . $anterior  . "',anotacion_final='" . $posterior . ' ';

        if (!$error->HayErrores()) {
            $tareas = tareas_model::update_tarea($data);
            echo $blade->render('tareas_añadir');
        } else {
            echo $blade->render('tareas_añadir', [
                'error' => $error
            ]);
        }

    } else {
        echo $blade->render('tareas_modificar', [
            'error' => $error
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
    require('app/libreria/tareas_filtrado.php');
    $filtrado = new filtrado;

    if (empty($identificacion)) {
        $error->AnotaError('identificacion', 'No has introducido un dni');
    } elseif (!$filtrado->validDniCifNie($identificacion)) {
        $error->AnotaError('identificacion', 'Formato no valido');
    }
    if (empty($nombre)) {
        $error->AnotaError('nombre', 'No has introducido un nombre');
    } elseif (!$filtrado->validarNombreApellido($nombre)) {
        $error->AnotaError('nombre', 'Formato no valido, no introduzca numeros.');
    }
    if (empty($apellido)) {
        $error->AnotaError('apellido', 'No has introducido un apellido');
    } elseif (!$filtrado->validarNombreApellido($apellido)) {
        $error->AnotaError('apellido', 'Formato no valido, no introduzca numeros.');
    }
    if (empty($telefono)) {
        $error->AnotaError('telefono', 'No has introducido un telefono');
    } elseif (!$filtrado->validarTelefono($telefono)) {
        $error->AnotaError('telefono', 'Formato no valido');
    }
    if (empty($descripcion)) {
        $error->AnotaError('descripcion', 'No has introducido una descripcion');
    }
    if (empty($correo)) {
        $error->AnotaError('correo', 'No has introducido un correo');
    } elseif (!$filtrado->validarEmail($correo)) {
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
    } elseif (!$filtrado->comprobarCodigo($codigo)) {
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
        if (!$filtrado->comprobar_fecha($final)) {
            $error->AnotaError('final', 'No puede ser menor que la fecha actual');
        }
    }
    return $error;
}
