<?php 

class Database  { 

    public $db;   
    private static $dns = "mysql:host=localhost;dbname=albañeria"; 
    private static $user = "root"; 
    private static $pass = "";     
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
