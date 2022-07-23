<?php
/* Smarty version 4.1.1, created on 2022-07-23 00:12:01
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\menu_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62db20b19a8ea9_46112021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bbcf0b0021633a1222b51cb12c2bd7c16b16924' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\menu_2.tpl',
      1 => 1658527920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62db20b19a8ea9_46112021 (Smarty_Internal_Template $_smarty_tpl) {
?>  <input type ="hidden" name = "iduser" value = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id = "user">
 <nav class="navbar navbar-expand-lg bg-dark ">
     <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
         <li class="nav-item">
          <a class="nav-link text-light" href="#" onclick= "fn_consumir_ws_getMaterias();">Informacion del estudiante</a>
         </li>
         </ul>
         </div>
    </div>
    </nav>
    <div>
        <p class="fs-3 text fw-bold text-light text-center">Bienvenido Admin</p>
    </div>
    
</body>
</html><?php }
}
