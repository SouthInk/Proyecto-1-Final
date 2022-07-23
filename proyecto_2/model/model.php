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
    function val_login($usu,$pass,$logintype){
        $this->ins_conexion = conexion::getInstance();
        $this->obj_conexion = $this->ins_conexion->conectar();
        
        if ($logintype == "alumno") {
          $sql = "SELECT id_alumno,nivel_id,login_alumno,clave_alumno,nombre_alumno,apellidos_alumno FROM alumno";
          $sql .= " WHERE login_alumno='$usu' AND clave_alumno=md5('$pass')";
        }
        else if($logintype == "admin"){
          $sql = "SELECT id_admin,login_admin,clave_admin,email_admin FROM administrador";
          $sql .= " WHERE login_admin='$usu' AND clave_admin=md5('$pass')";
          
        }else{
          $sql = "SELECT id_profesor,login_profesor,clave_profesor,nombre_profesor,apellidos_profesor,email_profesor,especialidad_prfoesor FROM profesor";
          $sql .= " WHERE login_alumno='$usu' AND clave_alumno=md5('$pass')";
        }
        
        $rs = $this->obj_conexion->query($sql); 
        $this->ins_conexion->desconectar();
        return $rs;
    }

    function get_grados(){
      $this->ins_conexion = conexion::getInstance();
      $this->obj_conexion = $this->ins_conexion->conectar();

      $sql = "SELECT id_nivel,nivel,nivel_curso,nivel_aula FROM nivel";
      $rs = $this->obj_conexion->query($sql);
        
        $this->ins_conexion->desconectar();
        return $rs;

    }
    
    function insert_usuario($grado,$usuario,$pass,$nombre,$apellidos){

      $this->ins_conexion = conexion::getInstance();
      $this->obj_conexion = $this->ins_conexion->conectar();
      $sql = "insert into alumno(nivel_id,login_alumno,clave_alumno,nombre_alumno,apellidos_alumno)";
      $sql .= " values('$grado','$usuario',md5('$pass'),'$nombre','$apellidos')";
      $rs = $this->obj_conexion->query($sql);
      $this->ins_conexion->desconectar();
      return $rs;

  }
   


    function del_usuario(){}
    
    function upd_usuario(){}
    function select_usuario(){}


}

?>