<?php
include("Conexion.php");

        $nombre = $_GET["name"];
        $contraseña = $_GET["pass"];
        echo $contraseña;
        
        $query = Database::getInstance()->db->query("SELECT * FROM usuario WHERE nombre=$nombre AND contraseña=$contraseña");
        $usuario = array();
        while($usu = $query->fetch()){
            $usuario[] = $usu;
        }
        if ($usuario===null) {
            include("login.html");
        } else
            include("ahorcado.html");

    