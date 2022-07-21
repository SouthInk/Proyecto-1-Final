<?php
/* Smarty version 4.1.1, created on 2022-07-22 00:25:17
  from 'C:\Users\Gabriel\Documents\Universidad Documentos\XAMPP\htdocs\progra3\proyecto_2\view\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d9d24d8858b9_55624836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f86dae4ae25a16d3f97b84a4fbffd297e636d03' => 
    array (
      0 => 'C:\\Users\\Gabriel\\Documents\\Universidad Documentos\\XAMPP\\htdocs\\progra3\\proyecto_2\\view\\templates\\menu.tpl',
      1 => 1658442316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d9d24d8858b9_55624836 (Smarty_Internal_Template $_smarty_tpl) {
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
          <a class="nav-link text-light" aria-current="page" href="#" onclick= "fn_consumir_ws_getNota();">Test</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-light" href="#" onclick= "fn_consumir_ws_getMaterias();">Notas</a>
         </li>
         <li class="nav-item">
              <a class="nav-link text-light" href="#" >Pricing</a>
             </li>
             
         </ul>
         </div>
    </div>
    </nav>

    <div class="col-11 d-flex justify-content-center">
        <div class="border border-3 border-dark bg-gradient color">
        <ul class="nav navbar-nav">
           
            <p class="fs-3 text fw-bold text-dark text-center">Bienvenido, Estudiante</p>
            
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
        </div>
</body>
</html><?php }
}
