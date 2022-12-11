<?php

function inicio()
{
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_POST) {

        if (usuarios_model::getOneUsuario($_POST['nombre'], $_POST['contraseña'])) {
            session_start();
            $_SESSION["usuario"] = $_POST['nombre'];
            echo $blade->render('elegir');
        } else {
            $error->AnotaError('usuario', 'Nombre y/o contraseña incorrectos');
            echo $blade->render('login', [
                'error' => $error
            ]);
        }
    } else {
        echo $blade->render('login', [
            'error' => $error
        ]);
    }
}

function login()
{
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    require("app/models/GestorErrores.php");

    $usuarios = usuarios_model::get_usuarios();
    echo $blade->render('usuarios_mostrar', [
        'usuarios' => $usuarios
    ]);

}

function buscar()
{
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    $usuarios = usuarios_model::get_usuarios();
    $id = $_POST['buscador'];

    if ($_POST) {

        if (is_nan($id)) {
            $usuario = usuarios_model::getUsuario($id);
            echo $blade->render('usuarios_mostrar', [
                'usuarios' => $usuario
            ]);
        } else {
            echo $blade->render('usuarios_mostrar', [
                'usuarios' => $usuarios
            ]);
        }
        
    } else {
        echo $blade->render('usuarios_mostrar', [
            'usuarios' => $usuarios
        ]);
    }
}

function verUsuarios()
{
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");

    $usuarios = usuarios_model::get_usuarios();
    echo $blade->render('usuarios_mostrar', [
        'usuarios' => $usuarios
    ]);
}

function crear()
{

    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    require("app/models/GestorErrores.php");

    $error = new GestorErrores('<span style="color: red;">', '</span>');

    if ($_POST) {

        $error = filtradoUsuario($error, $_POST['nombre'], $_POST['apellido'], $_POST['contraseña'], $_POST['correo'], $_POST['tipo']);

        $data = "'" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['contraseña'] . "','" . $_POST['correo'] . "','" . $_POST['tipo'] . "'";

        if (!$error->HayErrores()) {
            usuarios_model::insert_usuario($data);
            $usuarios = usuarios_model::get_usuarios();
            echo $blade->render('usuarios_mostrar', [
                'usuarios' => $usuarios
            ]);
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

function verOneUsuario()
{
    //Llamada al modelo
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    require("app/models/GestorErrores.php");
    $id = $_GET['id'];
    $usuarioUnico = usuarios_model::getUsuario($id);
    $error = new GestorErrores('<span style="color: red;">', '</span>');
    if ($_POST) {

        $error = filtradoUsuario($error, $_POST['nombre'], $_POST['apellido'], $_POST['contraseña'], $_POST['correo'], $_POST['tipo']);

        $data = "nombre='" . $_POST['nombre']  . "', apellido='" . $_POST['apellido']  . "', contraseña='" . $_POST['contraseña']  . "', correo='" . $_POST['correo']  . "', tipo='" . $_POST['tipo'] . "'";

        if (!$error->HayErrores()) {

            usuarios_model::update_usuario($data, $id);
            $usuarios = usuarios_model::get_usuarios();
            echo $blade->render('usuarios_mostrar', [
                'usuarios' => $usuarios
            ]);
        } else {
            echo $blade->render('usuarios_modificar', [
                'error' => $error, 'usuarios' => $usuarioUnico
            ]);
        }
    } else {
        echo $blade->render('usuarios_modificar', [
            'usuarios' => $usuarioUnico, 'error' => $error
        ]);
    }
}

function borrarUsuario()
{
    //Llamada al modelo
    $id = $_GET['id'];
    include('app/models/varios.php');
    require("app/models/usuarios_model.php");
    usuarios_model::delete_usuario($id);
    $usuarios = usuarios_model::get_usuarios();
    echo $blade->render('usuarios_mostrar', [
        'usuarios' => $usuarios
    ]);
}

function filtradoUsuario($error, $nombre, $apellido, $contraseña, $correo, $tipo)
{
    include("app/libreria/Util-ValidarNombre.php");
    include("app/libreria/Util-ValidarCorreo.php");

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
    if (empty($contraseña)) {
        $error->AnotaError('telefono', 'No has introducido una contraseña');
    }
    if (empty($correo)) {
        $error->AnotaError('correo', 'No has introducido un correo');
    } elseif (!validarEmail($correo)) {
        $error->AnotaError('correo', 'El correo no tiene un formato valido');
    }
    if (empty($tipo)) {
        $error->AnotaError('tipo', 'No has introducido un tipo');
    }
    return $error;
}
