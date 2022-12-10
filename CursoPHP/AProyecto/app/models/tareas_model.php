<?php
require_once("Conectar.php"); 
class tareas_model {

    public static function get_tarea(){

        $query = Database::getInstance()->db->query("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $tareas = array();
        while($tarea = $query->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }

    public static function get_provincias(){

        $query = Database::getInstance()->db->query("SELECT * FROM tbl_provincias");
        $provincias = array();
        while($tarea = $query->fetch()){
            $provincias[] = $tarea;
        }
        return $provincias;
    }

    public static function comprobar_provincia($nombre){

        $query = Database::getInstance()->db->query("SELECT * FROM tbl_provincias WHERE nombre=$nombre");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public static function getOnetarea($condicion){

        $query = Database::getInstance()->db->query("SELECT * FROM tareas WHERE " . $condicion);
        $tareas = array();
        while($tarea = $query->fetch(PDO::FETCH_ASSOC)){
            $tareas[] = $tarea;
        }
        return $tareas;
    }
    public static function get_tareaPendiente(){

        $query = Database::getInstance()->db->prepare("SELECT * FROM tareas WHERE estado_tarea = ? ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array("P"));
        $tareas = array();
        while($tarea = $query->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }
    public static function insert_tarea($data){
        
        $query = Database::getInstance()->db->query("INSERT INTO tareas VALUES(NULL," . $data . ")");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function update_tarea($data){

        $query = Database::getInstance()->db->query("UPDATE tareas SET $data WHERE tarea_id=1");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function delete_tarea($tarea_id){
        
        $query = Database::getInstance()->db->prepare("DELETE FROM tareas WHERE tarea_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array($tarea_id));
        $resultado = $query->fetch();
        return $resultado;
    }
}
