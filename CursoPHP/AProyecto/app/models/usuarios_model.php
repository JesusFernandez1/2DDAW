<?php
require("Conectar.php");
class usuarios_model
{

    public static function get_usuarios()
    {

        $query = Database::getInstance()->db->query("SELECT * FROM usuarios");
        $usuarios = array();
        while ($usuario = $query->fetch()) {
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public static function getUsuario($id)
    {

        $query = Database::getInstance()->db->query("SELECT * FROM usuarios WHERE usuario_id = '$id'");
        $usuarios = array();
        while ($usuario = $query->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public static function getOneUsuario($nombre, $contraseña)
    {

        $query = Database::getInstance()->db->query("SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña = '$contraseña'");
        $usuarios = array();
        while ($usuario = $query->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public static function insert_usuario($data)
    {

        $query = Database::getInstance()->db->query("INSERT INTO usuarios VALUES(NULL," . $data . ")");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function update_usuario($data, $usuario_id){

        $query = Database::getInstance()->db->query("UPDATE usuarios SET $data WHERE usuario_id = '$usuario_id'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public static function delete_usuario($usuario_id)
    {

        $query = Database::getInstance()->db->prepare("DELETE FROM usuarios WHERE usuario_id = ?");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array($usuario_id));
        $resultado = $query->fetch();
        return $resultado;
    }
}
