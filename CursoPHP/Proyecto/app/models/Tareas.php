<?php
require_once "Conectar.php"; 
class tareas_model{
    public function get_tarea(){

        $query = Database::getInstance()->db->prepare("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $resultado = $query->fetch();
        return $resultado;
    }
    public function get_tareaPendiente(){

        $query = Database::getInstance()->db->prepare("SELECT * FROM tareas WHERE estado_tarea = ? ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array("P"));
        $resultado = $query->fetch();
        return $resultado;
    }
    public function insert_tarea(){
        
        $query = Database::getInstance()->db->prepare("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $resultado = $query->fetch();
        return $resultado;
    }
    public function update_tarea($nombre, $campos, $idt){
        $cadena = "";

        foreach ($nombre as $valor => $contenido) {

            $cadena .= $campos[$valor] . " = " . $contenido . " ,";

        }

        
        $query = Database::getInstance()->db->prepare("UPDATE FROM tareas SET $cadena WHERE tarea_id=$idt");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $resultado = $query->fetch();
        return $resultado;
    }
    public function delate_tarea($tarea_id){
        
        $query = Database::getInstance()->db->prepare("DELETE FROM tareas WHERE tarea_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array($tarea_id));
        $resultado = $query->fetch();
        return $resultado;
    }
}
?>
