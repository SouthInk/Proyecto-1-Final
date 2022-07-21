<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body background= ".\images\background2.jpg">
<script src = "js/utils.js"></script>
   
    <script src="js/bootstrap.bundle.js"></script>
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
                                {section name=grados loop=$grados}
                                <option value = "{$grados[grados].id}">{$grados[grados].grado}</option>
                                {/section}  
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
</html>