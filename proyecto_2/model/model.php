<?php
require_once "conn/conexion.php";

class model{

private $ins_conexion;
private $obj_conexion;

private static $instance = null;


    public static function getInstance(){ //Singleton
      if (self::$instance==null) {
        self::$instance = new model();
      }
      
        return  self::$instance;
      

    }
//solo le interesa tener los recursos, no conectarse a la base de datos
    function val_login($usu,$pass){
        $this->ins_conexion = conexion::getInstance();
        $this->obj_conexion = $this->ins_conexion->conectar();
        $sql = "SELECT id_alumno,nivel_id,login_alumno,clave_alumno,nombre_alumno,apellidos_alumno FROM alumno";
        $sql .= " WHERE login_alumno='$usu' AND clave_alumno='$pass'";
        $rs = $this->obj_conexion->query($sql); 
       
        $this->ins_conexion->desconectar();
        return $rs;
    }
    function del_usuario(){}
    function insert_usuario(){}
    function upd_usuario(){}
    function select_usuario(){}


}

?>