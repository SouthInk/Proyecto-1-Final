<?php
/* Smarty version 4.1.1, created on 2022-07-07 22:45:58
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c74606a8c3a1_78288518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca6cd9d49113875c56449af39081277ffc24701' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\register.tpl',
      1 => 1657216123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c74606a8c3a1_78288518 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <td><label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Nivel:</label></td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="nivel" data-bs-toggle="dropdown" aria-expanded="false">
                                 Nivel
                                
                              
                                <ul class="dropdown-menu" aria-labelledby="nivel">
                                  <li><a class="dropdown-item" href="#">Septimo</a></li>
                                  <li><a class="dropdown-item" href="#">Octavo</a></li>
                                  <li><a class="dropdown-item" href="#">Noveno</a></li>
                                </ul>
                              </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="usuario" class="fs-6 fw-bold form-label text-dark text-center">Nombre y Apellidos:</label></td>
                        <td><input type="text" name="txtNombre" class="form-control" placeholder="Nombre"></td>
                        <td><input type="text" name="txtApellidos" class="form-control" placeholder="Apellidos"></td>
                    </tr>
                </table>
                <div class = "text-center fs-4 p-2"><input type="submit" value="Registrarse" class = "btn btn-dark"></div>
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
