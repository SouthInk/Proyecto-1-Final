<?php
/* Smarty version 4.1.1, created on 2022-07-05 22:15:39
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\semana_8\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c49beb75fea3_44638220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6707d11e8ee58f5fb6e9928f07a40fa5c4d00a35' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\semana_8\\view\\templates\\login.tpl',
      1 => 1657052137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c49beb75fea3_44638220 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body background= ".\images\background.jpg">

  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"><?php echo '</script'; ?>
>
   
   <div>
   <h1 class= "text-center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>
   
   </div>
  

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
      </table>
      
       <div class = "text-center fs-4 p-2"><input type="submit" value="Iniciar sesión" class = "btn btn-light"></div>
      <div class = "text-center fs-4"><a href = "index.php?action=abrir_registro" class= "link-light">¿Nuevo usuario?</a></div>
  </form>
  </div>
    
  </body>
</html>
<?php }
}
