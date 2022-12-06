<?php

    function ver() {
        //Llamada al modelo
        require("models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->get_tarea();
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("views/tareas_mostrar.php");
    }
    
    function verPendiente() {
        //Llamada al modelo
        require("../models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->get_tareaPendiente();
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("views/tareas_pendientes.php");
    }

    function insert() {
        //Llamada al modelo
        require("../models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->insert_tarea();
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("../views/tareas_pendientes.php");
    }

    function update() {
        //Llamada al modelo
        require("../models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->update_tarea();
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("../views/tareas_pendientes.php");
    }

    function delete() {
        //Llamada al modelo
        require("../models/tareas_model.php");
        $modelo_tarea = new tareas_model();
        $tareas = $modelo_tarea->delete_tarea($tarea_id);
        if ($tareas === null){
            die("No existe ninguna tarea");
        }
        //Pasamos a la vista toda la información que se desea representar
        include("../views/tareas_pendientes.php");
    }




