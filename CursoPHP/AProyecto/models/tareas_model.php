<?php
require("Conectar.php"); 
class tareas_model {

    public function get_tarea(){

        $query = Database::getInstance()->db->query("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $tareas = array();
        while($tarea = $query->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }

    public function getOnetarea($condicion){

        $query = Database::getInstance()->db->query("SELECT * FROM tareas WHERE " . $condicion);
        $tareas = array();
        while($tarea = $query->fetch(PDO::FETCH_ASSOC)){
            $tareas[] = $tarea;
        }
        return $tareas;
    }
    public function get_tareaPendiente(){

        $query = Database::getInstance()->db->prepare("SELECT * FROM tareas WHERE estado_tarea = ? ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array("P"));
        $tareas = array();
        while($tarea = $query->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }
    public function insert_tarea($data){
        
        $query = Database::getInstance()->db->query("INSERT INTO tareas VALUES(NULL," . $data . ")");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function update_tarea($data, $condicion){
        
        $query = Database::getInstance()->db->query("UPDATE FROM tareas SET " . $data . " WHERE " . $condicion);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_tarea($tarea_id){
        
        $query = Database::getInstance()->db->prepare("DELETE FROM tareas WHERE tarea_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array($tarea_id));
        $resultado = $query->fetch();
        return $resultado;
    }
}
