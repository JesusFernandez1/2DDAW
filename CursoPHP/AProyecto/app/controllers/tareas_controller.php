<?php

    function inicio()
    {
        include("views/Operaciones-Tareas.php");
    }

    function ver() {
        //Llamada al modelo
        include('app/models/varios.php');
        require("app/models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->get_tarea();
        if ($tareas === null){
            die("No existe ninguna tarea");
        } else {
        //Pasamos a la vista toda la información que se desea representar
        //include("app/views/tareas_mostrar.php");
        echo $blade->render('tareas_mostrar', [
            'tarea'=>$tareas
        ]);
        }
    }
    
    function verPendiente() {
        //Llamada al modelo
        require("app/models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->get_tareaPendiente();
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("app/views/tareas_pendientes.php");
    }

    function guardar()
    {
        $identificacion = $_REQUEST['identificacion'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $poblacion = $_REQUEST['poblacion'];
        $codigo = $_REQUEST['codigo'];
        $estado = $_REQUEST['estado'];
        $inicio = $_REQUEST['inicio'];
        $operario = $_REQUEST['operario'];
        $final = $_REQUEST['final'];
        $anterior = $_REQUEST['anterior'];
        $posterior = $_REQUEST['posterior'];
        $resumen = $_REQUEST['resumen'];

        $data = "'" . $identificacion . "'," . $nombre . "'," . $apellido . "'," . $telefono . "'," . $correo . "',"
         . $poblacion . "'," . $codigo . "'," . $estado . "'," . $inicio . "'," . $operario . "'," . $final . "'," . $anterior . "'," . $posterior . "'," . $resumen;
         $modelo_tarea = new tareas_model();
        $dato = $modelo_tarea->insert_tarea($data);
        header("location:" . urlsite);
    }

    function editar()
    {
        $id = $_REQUEST['id'];
        $modelo_tarea = new tareas_model();
        $dato = $modelo_tarea->getOnetarea("id=" . $id);
        require_once("views/Operaciones-Modificar.php");
    }

    function update() {

        $id = $_REQUEST['id'];
        $identificacion = $_REQUEST['identificacion'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $poblacion = $_REQUEST['poblacion'];
        $codigo = $_REQUEST['codigo'];
        $estado = $_REQUEST['estado'];
        $inicio = $_REQUEST['inicio'];
        $operario = $_REQUEST['operario'];
        $final = $_REQUEST['final'];
        $anterior = $_REQUEST['anterior'];
        $posterior = $_REQUEST['posterior'];
        $resumen = $_REQUEST['resumen'];
        $data = "NIF/CIF='" . $identificacion . "',nombre=" . $nombre  . "',apellido=" . $apellido  . "',telefono=" . $telefono  . "',correo=" . $correo  . "',poblacion=" . $poblacion  
        . "',codigo_postal=" . $codigo  . "',estado_tarea=" . $estado  . "',fecha_inicio=" . $inicio  . "',operario=" . $operario  . "',fecha_final=" . $final  . "',anotacion_inicio=" . $anterior  . "',anotacion_final=" . $posterior  . "',resumen=" . $resumen ;
        $modelo_tarea = new tareas_model();
        $dato = $modelo_tarea->update_tarea($data, "tarea_id=" . $id);
        header("location:" . urlsite);
    }

    function delete() {
        //Llamada al modelo
        require("models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->delete_tarea($tarea_id);
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("views/tareas_pendientes.php");
    }




