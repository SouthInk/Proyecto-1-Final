<?php
require_once "libs/smarty_4_1_1/Smarty.class.php";

class config_smarty{

private $objSmarty;


private static $instance = null;


    public static function getInstance(){ //Singleton
      if (self::$instance==null) {
        self::$instance = new config_smarty();
      }
      
        return  self::$instance;
      

    }

  function __construct(){
    $this->objSmarty = new Smarty();//Creo una instancia de la clase Smarty
    $this->setRutas();
  }

  function setRutas(){
    //Definicion de las rutas de los dir que se han creado para Smarty
    $this->objSmarty->template_dir = "view/templates";
    $this->objSmarty->compile_dir  = "view/templates_c";
    $this->objSmarty->cache_dir    = "control/cache";
    $this->objSmarty->config_dir   = "control/configs";

  }
  function setAssign($variable,$valor){
    $this->objSmarty->assign($variable,$valor);
    //es el encargado de asociar un valor(php) a un elemento html
    //$variable es el elemento html
    //$valor es el valor que asignare a mi campo html
  }

  function setDisplay($archivo){
    $this->objSmarty->display($archivo);
    //el display muestra en pantalla el html(tpL)
  }

}

 ?>
