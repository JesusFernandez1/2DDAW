<?php

function inicio()
{
    include('app/models/varios.php');
    echo $blade->render('login');
}

function verOperarios()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/operarios_model.php");
    $operarios = operarios_model::get_usuario();
    if ($operarios === null) {
        die("No existe ninguna tarea");
    } else {
        //Pasamos a la vista toda la información que se desea representar
        //include("app/views/operarios_mostrar.php");
        //print_r($operarios);
        //die();
        echo $blade->render('operarios_mostrar', [
            'operarios' => $operarios
        ]);
    }
}

function guardar()
{

    include('app/models/varios.php');
    require("app/models/operarios_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_GET) {

        $nombre = $_GET['identificacion'];
        $apellido = $_GET['apellido'];
        $contraseña = $_GET['contraseña'];
        $correo = $_GET['correo'];
        $tipo = $_GET['tipo'];

        $error = filtradoUsuario($error, $nombre, $apellido, $contraseña, $correo, $tipo);

        $data = "'" . $nombre . "','" . $apellido . "','" . $contraseña . "','" . $correo . "','" . $tipo . "'";

        if (!$error->HayErrores()) {
            $operarios = operarios_model::insert_operario($data);
            echo $blade->render('operarios_añadir');
        } else {
            echo $blade->render('operarios_añadir', [
                'error' => $error
            ]);
        }
    } else {
        echo $blade->render('operarios_añadir', [
            'error' => $error
        ]);
    }
}

function update_operarios()
{

    include('app/models/varios.php');
    require("app/models/operarios_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_GET) {

        $nombre = $_GET['identificacion'];
        $apellido = $_GET['apellido'];
        $contraseña = $_GET['contraseña'];
        $correo = $_GET['correo'];
        $tipo = $_GET['tipo'];

        $error = filtradoUsuario($error, $nombre, $apellido, $contraseña, $correo, $tipo);

        $data = " nombre='" . $nombre . "',apellido='" . $apellido  . "',contraseña='" . $contraseña  . "',correo='" . $correo . "',tipo='" . $tipo  . ' ';

        if (!$error->HayErrores()) {
            $operarios = operarios_model::update_operario($data, 'usuario_id=2');
            echo $blade->render('operarios_añadir');
        } else {
            echo $blade->render('operarios_añadir', [
                'error' => $error
            ]);
        }
    } else {
        echo $blade->render('operarios_modificar', [
            'error' => $error
        ]);
    }
}

function delete_operarios()
{

    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/operarios_model.php");
    if ($operarios === null) {
        die("No existe ninguna tarea");
    } else {
        $operarios = operarios_model::delete_operario($tarea_id);
        echo $blade->render('menu.blade.php');
    }
}

function filtradoUsuario($error, $nombre, $apellido, $contraseña, $correo, $tipo)
{
    require('app/libreria/tareas_filtrado.php');
    $filtrado = new filtrado;

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
    if (empty($contraseña)) {
        $error->AnotaError('contraseña', 'No has introducido un contraseña');
    } elseif (!$filtrado->validarTelefono($telefono)) {
        $error->AnotaError('contraseña', 'Formato no valido');
    }
    if (empty($correo)) {
        $error->AnotaError('correo', 'No has introducido un telefono');
    } elseif (!$filtrado->validarTelefono($telefono)) {
        $error->AnotaError('correo', 'Formato no valido');
    }
    if (empty($tipo)) {
        $error->AnotaError('tipo', 'No has introducido un tipo');
    }
    return $error;
}
