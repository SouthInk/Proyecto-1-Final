<?php
/* Smarty version 4.1.1, created on 2022-07-05 22:09:52
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\semana_8\view\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c49a904c7751_57165267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b2bec587b19ceff910e537cb37bd66ec31939a7' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\semana_8\\view\\templates\\register.tpl',
      1 => 1657051787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c49a904c7751_57165267 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body background= ".\images\background2.jpg">

  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"><?php echo '</script'; ?>
>

  <h1 class= "text-center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>

  <div class = "container-fluid d-flex justify-content-center align-items-center vh-100 ">
  <form action="index.php" method="post" class = "border border-white p-5 rounded text-bg-dark">

      <input type ="hidden" name = "action" value = "login">
      <table border = 0>
        <tr>
          <td class="fs-4 fw-bold form-label p-2">Usuario: </td>
          <td><input type="text" name="txtUsuario" class = "form-control" required></td>
        </tr>
        <tr>
          <td class="fs-4 fw-bold form-label p-2">Contraseña: </td>
          <td><input type="password" name="txtPass" class = "form-control" required></td>
        </tr>
        <tr>
          <td class="fs-4 fw-bold form-label p-2">Nombre: </td>
          <td><input type="password" name="txtNombre" class = "form-control" required></td>
        </tr>
      </table>
       <div class = "text-center fs-4 p-2"><input type="submit" value="Registrarse" class = "btn btn-light"></div>
       <div class = "text-center fs-4"><a href = "index.php?action=abrir_login" class= "link-light">¿Desea loguearse?</a></div>
        
  </form>
  </div>
    
  </body>
</html><?php }
}
