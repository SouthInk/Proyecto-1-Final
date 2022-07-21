<?php 

class conexion{
    private $host;
    private $db_name;
    private $user;
    private $pass;
    private $conn;


    private static $instance = null;


    public static function getInstance(){ //Singleton
        if (self::$instance==null) {
          self::$instance = new conexion();
        }
        
          return  self::$instance;
        
  
      }

    function __construct(){
        $this->host = "localhost";
        $this->db_name = "bd_colegio";
        $this->user = "root";
        $this->pass = "";
    }
    
    function conectar(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db_name = "bd_colegio");
        if (!$this->conn) {
           echo("Error en conexion a DB");
           exit;
        }

        return $this->conn;
    }
    function desconectar(){

        mysqli_close($this->conn);
    }
}


?>