<?php
require_once "libs/smarty_4_1_1/config_smarty.php";
require_once "model/model.php";
  class control{
    private $smarty;
    private $objModel;
      // atributos(public, private, protected)
      // metodos
      // funciones

private static $instance = null;


    public static function getInstance(){ //Singleton
      if (self::$instance==null) {
        self::$instance = new control();
      }
      
        return  self::$instance;
      

    }

      function __construct(){
        //$this->smarty = new config_smarty();
        //Singleton
        $this->smarty = config_smarty::getInstance();

        //Llamada a la clase Model
        $this->objModel = model::getInstance();
      }


      function gestor(){

        if (!isset($_REQUEST['action'])) {
          $this->abrir_login();

        }
        else{
          $action = $_REQUEST['action'];
          switch ($action) {
            case "login":
              $this->procesar_login();
              break;
              case "abrir_registro":
                $this->abrir_Registro();
                break;
                case "abrir_login":
                  $this->abrir_login();
              // VALIDAR LOGIN
              break;


          }
        }

        //$this->smarty->setAssign("texto","hola mundo Assign");
        //$this->smarty->setAssign("titulo","Pagina Progra 3");
        //$numeros = array(12,34,23,15,12,7,23);
        //$this->smarty->setAssign("arreglo",$numeros);
        //$this->smarty->setDisplay("login.tpl");
      }

      function abrir_login(){ 
        $this->smarty->setAssign("titulo","Sistema Academico");
        $this->smarty->setAssign("msg","error");
          $this->smarty->setDisplay("index.tpl");

      }

      function abrir_Registro(){
      
        $this->smarty->setDisplay("register.tpl");
      }

      function procesar_login(){
        $usu = $_REQUEST['txtUsuario'];
        $pass = $_REQUEST['txtPass'];
        $rs = $this->objModel->val_login($usu,$pass);
        $flag = 0;
        
        while ($fila = $rs->fetch_assoc()) {
            echo "Nombre: ".$fila['nombre_alumno'];
            $flag = 1;
        }

        if ($flag == 1) {
          echo "Usuario correcto";
        }else {
          $this->smarty->setAssign("msg","Error usuario o password erroneos.");
          $this->smarty->setAssign("titulo","Sistema Academico");
          $this->smarty->setDisplay("index.tpl");
        }
        
        
      }


  }

 ?>
