<?php
/* Smarty version 4.1.1, created on 2022-07-21 17:44:26
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d9745a7751e8_39689197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d36c349b773e9b766d21a58fc8366fb7df3975' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\login.tpl',
      1 => 1658415530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d9745a7751e8_39689197 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <?php echo '<script'; ?>
 src="js/login_validation.js"><?php echo '</script'; ?>
>    
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body background= ".\images\background.jpg">
    


    <h1 class= "text-center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>
 

    <div class="container">

        <div class="row">
            <div class="col">
                <div class="position-absolute bottom-0 start-0">

                    <div class="col-2 border border-dark border-3 color" >
                     
                    </div>
                    <div class="border border-dark border-3 btn-group-vertical bg-gradient color">
                        <button type = "button" class="btn btn-primary-outline btn-lg">Localización</button>
                        <button type = "button" class="btn btn-primary-outline btn-lg">Caracteristicas</button>
                        <button type = "button" class="btn btn-primary-outline btn-lg">Instalaciones</button>
                        <button type = "button" class="btn btn-primary-outline btn-lg">Servicios</button>
                        <button type = "button" class="btn btn-primary-outline btn-lg">Información</button>
                        <button type = "button" class="btn btn-primary-outline btn-lg">Proyectos de la escuela</button>
                    </div>
                    <form action="index.php" method="post">
                        <input type ="hidden" name = "action" value = "login">
                        <div class="border border-dark border-3 bg-gradient color" >
                            <input type ="hidden" name = "action" value = "login">
                          <label for="usuario" class="fs-6 fw-bold form-label text-dark">Usuario:</label>
                            <input type="text" name="txtUsuario" class="form-control">
                            <label for="contraseña" class="fs-6 fw-bold form-label text-dark">Contraseña:</label>
                            <input type="password" name="txtPass" class="form-control">
                            <div class="button"><button type = "submit"  value="Iniciar sesión" class="btn btn-dark" >Iniciar sesión</button></div>
                            <div class = "text-center fs-4"><a href = "index.php?action=abrir_registro" class= "link-light">¿Nuevo usuario?</a></div>
                           
                            
                        </div>
                    </form>

                </div>
                
            </div>
            
        </div>

    </div>





<?php }
}
