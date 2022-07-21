<?php
/* Smarty version 4.1.1, created on 2022-07-15 22:49:04
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d1d2c04165a8_54530683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca6cd9d49113875c56449af39081277ffc24701' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\register.tpl',
      1 => 1657918094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1d2c04165a8_54530683 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body background= ".\images\background2.jpg">
<?php echo '<script'; ?>
 src = "js/utils.js"><?php echo '</script'; ?>
>
   
    <?php echo '<script'; ?>
 src="js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
    <div class = "container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="tab-content">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#alumno">Alumno</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#profesor">Profesor</a>
                </li>
            </ul>   
           
            <div class="border border-dark border-3 bg-gradient color tab-pane container active" id="alumno">
                <form action="index.php" method="post" id="frmRegistro" name="frmRegistro">

                <input type ="hidden" name = "action" value = "guardar_nuevo_usuario">
                <table>
                    <tr>
                      <td> <label class="fs-6 fw-bold form-label text-dark text-center">Usuario:</label></td> 
                       <td><input type="text" name="txtUsuario" class="form-control"></td> 
                    </tr>
                    <tr>
                        <td> <label  class="fs-6 fw-bold form-label text-dark text-center">Contraseña:</label></td> 
                       <td><input type="password" name="txtPass" id= "txtPass" class="form-control"></td> 
                    </tr>
                    <tr>
                        <td> <label  class="fs-6 fw-bold form-label text-dark text-center">Repetir Contraseña:</label></td> 
                       <td><input type="password" name="txtRPass" id= "txtRPass" class="form-control"></td> 
                    </tr>
                    <tr>
                        <td><label  class="fs-6 fw-bold form-label text-dark text-center">Nivel:</label></td>
                        <td>
                                <select class="form-select" name = "nivel">
                                <?php
$__section_grados_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['grados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_grados_0_total = $__section_grados_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_grados'] = new Smarty_Variable(array());
if ($__section_grados_0_total !== 0) {
for ($__section_grados_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index'] = 0; $__section_grados_0_iteration <= $__section_grados_0_total; $__section_grados_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index']++){
?>
                                <option value = "<?php echo $_smarty_tpl->tpl_vars['grados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['grados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grados']->value['index'] : null)]['grado'];?>
</option>
                                <?php
}
}
?>  
                        </td>
                    </tr>
                    <tr>
                        <td><label class="fs-6 fw-bold form-label text-dark text-center">Nombre y Apellidos:</label></td>
                        <td><input type="text" name="txtNombre" class="form-control" placeholder="Nombre"></td>
                        <td><input type="text" name="txtApellidos" class="form-control" placeholder="Apellidos"></td>
                    </tr>
                </table>
                <div class = "text-center fs-4 p-2"><input type="button" value="Registrarse" class = "btn btn-light"  onclick="ValidarFrmRegistro();"></div>
                </form>
            </div>

            

            <div class="border border-dark border-3 bg-gradient color tab-pane container fade" id = "profesor">
                    <table>
                        <tr>
                          <td> <label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Usuario:</label></td> 
                           <td><input type="text" name="txtUsuario" class="form-control"></td> 
                        </tr>
                        <tr>
                            <td> <label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Contraseña:</label></td> 
                           <td><input type="text" name="txtPass" class="form-control"></td> 
                        </tr>
                        <tr>
                            <td><label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Nombre y Apellidos:</label></td>
                            <td><input type="text" name="txtNombre" class="form-control" placeholder="Nombre"></td>
                            <td><input type="text" name="txtApellidos" class="form-control" placeholder="Apellidos"></td>
                        </tr>
                        <tr>
                            <td> <label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Email:</label></td> 
                           <td><input type="text" name="txtEmail" class="form-control"></td> 
                        </tr>
                        <tr>
                            <td><label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Especialidad:</label></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="nivel" data-bs-toggle="dropdown" aria-expanded="false">
                                     Nivel
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="nivel">
                                      <li><a class="dropdown-item" href="#">Matematicas</a></li>
                                      <li><a class="dropdown-item" href="#">Estudios Sociales</a></li>
                                      <li><a class="dropdown-item" href="#">Español</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                    </table>
                    <div class = "text-center fs-4 p-2"><input type="submit" value="Registrarse" class = "btn btn-dark"></div>
                </div>

            
        </div>

      
        

    </div>
    
</body>
</html><?php }
}
