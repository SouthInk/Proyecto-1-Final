function ValidarFrmRegistro(){
    var pass1 = document.getElementById('txtPass').value;
    var pass2 = document.getElementById('txtRPass').value;

    if (pass1 == pass2) {
    document.forms["frmRegistro"].submit();
        
    }else{
    alert('Error, passwords diferentes! verifique...');
    }
}

function fn_consumir_ws_getMaterias(){
    var idalumno = document.getElementById('user').value;
   
    $.ajax({
        type: "GET",
        url: 'http://localhost/progra3/proyecto_2/ws/ws_alumnos.php?idalumno='+idalumno+"&accion=accion1",
        success: function(data) {
            $("#divAlumnos").html('');
            $("#divAlumnos").html(data);
            
        },
        error: function(error) {

            $("#divAlumnos").html('<div class="alert alert-warning" role="alert">Error cargando datos del WS</div>');

        }
      });

    
  }

  function fn_consumir_ws_getNotas(idmateria){
    var idalumno = document.getElementById('user').value;
    
    $.ajax({
        type: "GET",
        url: 'http://localhost/progra3/proyecto_2/ws/ws_alumnos.php?idmateria='+idmateria+"&accion=accion2&idalumno="+idalumno,
        success: function(data) {
          
            $("#divNotas").html('');
            $("#divNotas").html(data);
            
        },
        error: function(error) {

            $("#divNotas").html('<div class="alert alert-warning" role="alert">Error cargando datos del WS</div>');

        }
      });

  }