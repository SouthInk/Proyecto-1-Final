<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
    <script src="js/login_validation.js"></script>    
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body background= ".\images\background.jpg">
    


    <h1 class= "text-center">{$msg}</h1>
 

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
                    <form action="index.php" method="post">
                        <input type ="hidden" name = "action" value = "login">
                        <div class="border border-dark border-3 bg-gradient color">
                            <input type ="hidden" name = "action" value = "login">
                          <label for="usuario" class="fs-6 fw-bold form-label text-dark">Usuario:</label>
                            <input type="text" name="txtUsuario" class="form-control">
                            <label for="contraseña" class="fs-6 fw-bold form-label text-dark">Contraseña:</label>
                            <input type="password" name="txtPass" class="form-control">
                            <div class="button"><button type = "submit"  value="Iniciar sesión" class="btn btn-dark" >Iniciar sesión</button></div>
                            <div class = "text-center fs-4"><a href = "index.php?action=abrir_registro" class= "link-light">¿Nuevo usuario?</a></div>
                            <p class='fs-4 text fw-bold text-dark text-center '>Iniciar sesión como:</p>
                            <select name="tipoLogin" id="tipoLogin" class="form-select">
                                <option value="alumno">Alumno</option>
                                <option value="admin">Administrador</option>
                                <option value="profesor">Profesor</option>
                            </select>
                        </div>
                    </form>

                </div>
                
            </div>
            
        </div>

    </div>





