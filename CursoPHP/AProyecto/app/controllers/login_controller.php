<?php

function inicio()
{
    include('app/models/varios.php');
    echo $blade->render('login');
}

function login()
{
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    if (usuarios_model::getOneUsuario($_GET['nombre'],$GET_['contraseña'])) {
        echo $blade->render('header');
    } else {
        echo $blade->render('login');
    }
}

function verusuarios()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    usuarios_model::get_usuario();
    if ($usuarios === null) {
        die("No existe ninguna tarea");
    } else {
        //Pasamos a la vista toda la información que se desea representar
        //include("app/views/usuarios_mostrar.php");
        //print_r($usuarios);
        //die();
        echo $blade->render('usuarios_mostrar', [
            'usuarios' => $usuarios
        ]);
    }
}

function guardar()
{

    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
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
            usuarios_model::insert_operario($data);
            echo $blade->render('usuarios_añadir');
        } else {
            echo $blade->render('usuarios_añadir', [
                'error' => $error
            ]);
        }
    } else {
        echo $blade->render('usuarios_añadir', [
            'error' => $error
        ]);
    }
}

function update_usuarios()
{

    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_GET) {

        $error = filtradoUsuario($error, $_GET['identificacion'], $_GET['apellido'], $_GET['contraseña'], $_GET['correo'], $_GET['tipo']);

        $data = " nombre='" . $_GET['identificacion'] . "',apellido='" . $_GET['apellido']  . "',contraseña='" . $_GET['contraseña']  . "',correo='" . $_GET['correo'] . "',tipo='" . $_GET['tipo']  . ' ';

        if (!$error->HayErrores()) {
            usuarios_model::update_operario($data, 'usuario_id=2');
            echo $blade->render('usuarios_añadir');
        } else {
            echo $blade->render('usuarios_añadir', [
                'error' => $error
            ]);
        }
    } else {
        echo $blade->render('usuarios_modificar', [
            'error' => $error
        ]);
    }
}

function delete_usuarios()
{

    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    if ($usuarios === null) {
        die("No existe ninguna tarea");
    } else {
        usuarios_model::delete_operario($tarea_id);
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
