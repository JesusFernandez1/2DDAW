<?php
require("Conectar.php");
class operarios_model
{

    public static function get_usuario()
    {

        $query = Database::getInstance()->db->query("SELECT * FROM usuarios");
        $usuarios = array();
        while ($usuario = $query->fetch()) {
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public static function getOneUsuario($condicion)
    {

        $query = Database::getInstance()->db->query("SELECT * FROM usuarios WHERE " . $condicion);
        $usuarios = array();
        while ($usuario = $query->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public static function insert_operario($data)
    {

        $query = Database::getInstance()->db->query("INSERT INTO usuarios VALUES(NULL," . $data . ")");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function update_operario($data, $condicion)
    {

        $query = Database::getInstance()->db->query("UPDATE FROM usuarios SET " . $data . " WHERE " . $condicion);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function delete_operario($operario_id)
    {

        $query = Database::getInstance()->db->prepare("DELETE FROM usuarios WHERE operario_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array($operario_id));
        $resultado = $query->fetch();
        return $resultado;
    }
}
