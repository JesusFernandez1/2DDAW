<?php
require("Conexion.php");

        $nombre = $_GET["name"];
        $contraseña = $_GET["pass"];
        
        $query = Database::getInstance()->db->query("SELECT * FROM usuario WHERE nombre=$nombre AND contraseña=$contraseña");
        $usuario = array();
        while($usu = $query->fetch()){
            $usuario[] = $usu;
        }
        if ($usuario==null) {
            include("login.html");
        } else
            include("ahorcado.html");

    