<?php
/* Smarty version 4.1.1, created on 2022-07-22 23:29:59
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62db16d7626ca3_14934502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f86dae4ae25a16d3f97b84a4fbffd297e636d03' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\menu.tpl',
      1 => 1658525394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62db16d7626ca3_14934502 (Smarty_Internal_Template $_smarty_tpl) {
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
        <p class="fs-3 text fw-bold text-light text-center">Bienvenido, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
    </div>
    
</body>
</html><?php }
}
