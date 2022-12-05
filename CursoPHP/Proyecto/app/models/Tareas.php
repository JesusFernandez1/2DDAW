<?php
require_once "Conectar.php"; 
class tareas_model{
    public $tareas = [];
    public function get_tarea(){

        $cc = Database::getInstance();
        $query = $cc->db->prepare("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        while ($row = $query->fetch()){
            echo "Datos de las tareas: " . "<br>" . "<br>";
            echo "Nombre: " . $row["nombre"] . "<br>" . " Apellido: " . $row["apellido"] . "<br>";
            $tareas[] = array($row['nombre'], $row['apellido']);
        }
        $query->closeCursor();
        return $this->tareas;
    }
    public function get_tareaPendiente(){

        $cc = Database::getInstance();
        $query = $cc->db->prepare("SELECT * FROM tareas WHERE estado_tarea = ? ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array("P"));
        while ($row = $query->fetch()){
            echo "Datos de las tareas: " . "<br>" . "<br>";
            echo "Nombre: " . $row["nombre"] . "<br>" . " Apellido: " . $row["apellido"] . "<br>" . " Estado: " . $row["estado_tarea"];
            $tareas[] = array($row['nombre'], $row['apellido']);
        }
        $query->closeCursor();
        return $this->tareas;
    }
    public function insert_tarea(){
        $cc = Database::getInstance();
        $query = $cc->db->prepare("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        while ($row = $query->fetch()){
            
        }
        $query->closeCursor();
        return $this->tareas;
    }
    public function update_tarea(){
        $cc = Database::getInstance();
        $query = $cc->db->prepare("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        while ($row = $query->fetch()){
            
        }
        $query->closeCursor();
        return $this->tareas;
    }
    public function delate_tarea(){
        $cc = Database::getInstance();
        $query = $cc->db->prepare("DELETE FROM tareas WHERE tarea_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array('$tarea_id'));
        while ($row = $query->fetch()){
            echo "Datos de las tareas: " . "<br>" . "<br>";
            echo "Nombre: " . $row["nombre"] . "<br>" . " Apellido: " . $row["apellido"] . "<br>";
            $tareas[] = array($row['nombre'], $row['apellido']);
        }
        $query->closeCursor();
        return $this->tareas;
    }
}
?>
