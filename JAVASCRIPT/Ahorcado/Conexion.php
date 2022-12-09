<?php 

class Database  { 

    public $db;   
    private static $dns = "mysql:host=localhost;dbname=ahorcado"; 
    private static $user = "jesusfernandez"; 
    private static $pass = "Cp6z#2x5";     
    private static $instance;

    public function __construct () {        
       $this->db = new PDO(self::$dns,self::$user,self::$pass);       
    } 

    public static function getInstance() { 
        if(!isset(self::$instance)) { 
            $object= __CLASS__; 
            self::$instance=new $object; 
        } 
        return self::$instance; 
    }    
} 

?> 