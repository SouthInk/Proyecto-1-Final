<?php
/* Smarty version 4.1.1, created on 2022-06-14 04:59:23
  from 'C:\xampp\htdocs\programacion_3\semana_5\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a7f98b7abe03_76258589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a19359d18d6fb733dcbf9fc1c7f4b9e4df2efd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_3\\semana_5\\view\\templates\\login.tpl',
      1 => 1655175560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a7f98b7abe03_76258589 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
  <body>
    <form action="index.php" method="post">

      <input type ="hidden" name = "action" value = "login">
      <table border = 0>
        <tr>
          <td>Usuario</td>
          <td><input type="text" name="txtUsuario"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="txtPass"></td>
        </tr>
        <tr>
          <td colspan= "2"><input type="submit" value="Enviar"></td>
        </tr>
      </table>
  </form>
  </body>
</html>
<?php }
}
