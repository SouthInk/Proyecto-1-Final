<?php
/* Smarty version 4.1.1, created on 2022-07-13 23:19:24
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62cf36dc040419_11416957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1728b5b2163dec467f040bc4a582e3881bb1dab5' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\index.tpl',
      1 => 1657747160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cf36dc040419_11416957 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form>
                        
                        <div class="border border-dark border-3 bg-gradient color" >
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
      
                        <div class = "btn btn-dark"><input type="submit" value="Iniciar sesión" class = "btn btn-light"></div>
                            <div class = "text-center fs-4"><a href = "index.php?action=abrir_registro" class= "link-light">¿Nuevo usuario?</a></div>
                        </div>
                    </form>

                </div>
                
            </div>
            <div class="col-11 d-flex justify-content-center">

                <div class="border border-3 border-dark bg-gradient color ">
                    <p class="fs-3 text fw-bold text-dark text-center">Bienvenido, Estudiante: Nombre</p>
                    
                    <div class = "size">
                        <table class="border border-dark table table-dark table-striped  table-responsive table-hover">
                            <p class="fs-4 text fw-bold text-dark text-center   ">Horarios</p>
                            <tr class="table-dark">
                                <td >Asignatura: <td class="fw-bold">Estudios Sociales</td></td>
                            </tr>
                            <tr>
                                <td>Hora: <td class="fw-bold">10am-12pm</td></td>
                            </tr>
                
                        </table>
                    </div>   
                    
                        <table class="border border-dark table table-dark table-striped table-responsive table-hover">
                            <p class="fs-4 text fw-bold text-dark text-center ">Faltas de asistencia</p>
                            <tr>
                                <td>Asignatura:<td class="fw-bold">Español</td></td>
                            </tr>
                            <tr>
                                <td>Fecha: <td class="fw-bold">18/5/2022</td></td>
                            </tr>
                            <tr>
                                <td>Justificada <td class="fw-bold">No.</td></td>
                            </tr>
                        </table>

                        <table class="border border-dark table table-dark table-striped table-responsive table-hover">
                            <p class="fs-4 text fw-bold text-dark text-center ">Profesores</p>
                            <tr>
                                <td>Nombre del profesor: <td class="fw-bold">Roberto</td></td>
                            </tr>
                            <tr>
                                <td>Asignatura: <td class="fw-bold">Matematicas</td></td>
                            </tr>
                        </table>
                        <table class="border border-dark table table-dark table-striped table-responsive table-hover">
                            <p class="fs-4 text fw-bold text-dark text-center ">Notas</p>
                        <tr>
                            <td>Asignatura: <td class="fw-bold">Español</td></td>
                        </tr>
                        <tr>
                            <td>Trimestre I <td class="fw-bold">92</td></td>
                        </tr>
                        <tr>
                            <td>Trimestre II <td class="fw-bold">80</td></td>
                        </tr>
                        <tr>
                            <td>Trimestre III  <td class="fw-bold">100</td></td>
                        </tr>
                        </table>
                        
                        
                    
                </div>

                
            </div>
        </div>

    </div>




</body>
</html>
<?php }
}
