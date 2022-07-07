<?php
/* Smarty version 4.1.1, created on 2022-06-28 05:42:04
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\semana_6\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ba788c9763c2_51742546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121b37cfba5415a27dacc713b48c152cf3f6182c' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\semana_6\\view\\templates\\login.tpl',
      1 => 1655175560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba788c9763c2_51742546 (Smarty_Internal_Template $_smarty_tpl) {
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
