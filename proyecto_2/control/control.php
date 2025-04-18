<?php
session_start();
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
          if (isset($_SESSION['USUARIO'])) {
            $this->smarty->setAssign("nombre",$nombre);
            $this->smarty->setAssign("id",$_SESSION['ID']);
            $this->smarty->setDisplay("header.tpl");
            $this->smarty->setDisplay("menu.tpl");
            $this->smarty->setDisplay("body_1.tpl");
            $this->smarty->setDisplay("footer.tpl");
            
            $this->validarInactividad();
            //$this->ventana_principal();
          }else{
            $this->abrir_login();
          }
          

        }
        else{
          $action = $_REQUEST['action'];
          $this->validarInactividad();
        
          switch ($action) {
            case "login":
              $this->procesar_login();
              break;
              case "abrir_registro":
                $this->abrir_Registro();
                break;
                case "abrir_login":
                  $this->abrir_login();
              break;
              case "guardar_nuevo_usuario":
                $this->guardar_nuevo_usuario();
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
        $this->smarty->setAssign("msg","");
          $this->smarty->setDisplay("login.tpl");

      }

      function abrir_Registro(){
        $rs = $this->objModel->get_grados();
        $arrGrados = array();

        while ($fila = $rs->fetch_assoc()) {
          $lineaGrados = array();
          $lineaGrados["id"] = $fila['id_nivel'];
          $lineaGrados["grado"] = $fila['nivel'];
          $lineaGrados["curso"] = $fila['nivel_curso'];
          $lineaGrados["aula"] = $fila['nivel_aula'];
          $arrGrados[] = $lineaGrados;
      }

      $this->smarty->setAssign("grados",$arrGrados);
        $this->smarty->setAssign("msg","");
        $this->smarty->setAssign("titulo","POS UH");
        $this->smarty->setDisplay("register.tpl");
      }

      function procesar_login(){
        $usu = $_REQUEST['txtUsuario'];
        $pass = $_REQUEST['txtPass'];
        $logintype = $_REQUEST['tipoLogin'];
        
        $rs = $this->objModel->val_login($usu,$pass,$logintype);
        $flag = 0;
        $nivel = 0;
        $id = 0;
        while ($fila = $rs->fetch_assoc()) {
            //echo "Nombre: ".$fila['nombre_alumno'];
            if($logintype == "alumno"){
              $nivel = $fila['nivel_id'];
              $id = $fila['id_alumno'];
              $nombre = $fila['nombre_alumno'];
            }
            else if($logintype == "admin"){

            }

            $flag = 1;
        
        }
       
        
        if ($flag == 1) {
          
          $_SESSION['USUARIO'] = $usu;
          $_SESSION['NIVEL'] = $nivel;
          $_SESSION['ID'] = $id;
          $_SESSION['nombre'] = $nombre;
          $this->smarty->setAssign("nombre",$nombre);
          $this->smarty->setAssign("id",$_SESSION['ID']);
            $this->smarty->setDisplay("header.tpl");
            if($logintype == "alumno"){
              $this->smarty->setDisplay("menu.tpl");
            $this->smarty->setDisplay("body_1.tpl");
            }
            else if($logintype == "admin"){
              $this->smarty->setDisplay("menu_2.tpl");
            $this->smarty->setDisplay("body_1.tpl");
            }
            $this->smarty->setDisplay("footer.tpl");
            
          
         
        }else {
          $this->smarty->setAssign("msg","Error");
          $this->smarty->setAssign("titulo","POS UH");
          $this->smarty->setDisplay("login.tpl");
        }
        
        
      }

      function guardar_nuevo_usuario(){
        $usuario = $_REQUEST['txtUsuario'];
        $pass = $_REQUEST['txtPass'];
        $grado = $_REQUEST['nivel'];
        $nombre = $_REQUEST['txtNombre'];
        $apellidos = $_REQUEST['txtApellidos'];
      
        $rs = $this->objModel->insert_usuario($grado,$usuario,$pass,$nombre,$apellidos);
       

        $vmsg = "";
        if ($rs) {
          $vmg = "Usuario creado correctamente";
        }else{
          $vmg = "Error creando el usuario";
        }

        $this->smarty->setAssign("msg",$vmsg);
          $this->smarty->setAssign("close","");
          
          $this->smarty->setDisplay("login.tpl");
      }

      function validarInactividad(){
        //Comprobamos si esta definida la sesión 'tiempo'.
        if(isset($_SESSION['tiempo']) ) {
      
            //Tiempo en segundos para dar vida a la sesión.
            $inactivo = 1900;//20min en este caso.
      
            //Calculamos tiempo de vida inactivo.
            $vida_session = time() - $_SESSION['tiempo'];
      
                //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
                if($vida_session > $inactivo)
                {
                    //Removemos sesión.
                    session_unset();
                    //Destruimos sesión.
                    session_destroy();            
                    //Redirigimos pagina.
                    header("Location: index.php");
      
                    exit();
                } else {  // si no ha caducado la sesion, actualizamos
                    $_SESSION['tiempo'] = time();
                }
      
      
        } else {
            //Activamos sesion tiempo.
            $_SESSION['tiempo'] = time();
        }
      
      }


  }

 ?>
