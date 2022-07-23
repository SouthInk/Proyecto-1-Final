<?php
  $metodo = $_SERVER['REQUEST_METHOD'];

  switch($metodo){
  case 'GET':
      header("HTTP/1.1 200 successful");
      $accion = $_REQUEST['accion'];
      if ($accion == "accion1") {
        ListarMaterias();
      }
      else if($accion = "accion2"){
        ListarNotas();
        ListarFaltaAsistencia();
        ListarHorarios();
      }
      break;
  case 'DELETE':
      header("HTTP/1.1 200 successful");
      
      break;
  default:
      header('HTTP/1.1 405 Method not allowed');
      header('Allow: GET, PUT, DELETE');
      break;
    }
    function ListarMaterias(){
        $idAlumno = $_REQUEST['idalumno'];
        $linkConect = mysqli_connect("localhost","root","","bd_colegio");
         $sql = "select asignatura_id from asignatura_has_alumno where alumno_id=".$idAlumno;
         $rs = $linkConect->query($sql);
        
        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center'>Asignaturas</p>";
        
        
        $asignatura = null;
        $respuesta .= "<tr>";
         while($fila = $rs->fetch_assoc()){
            $sql = "select nombre_asignatura,id_asignatura from asignatura where id_asignatura=".$fila['asignatura_id'];
            $rsAsignatura = $linkConect->query($sql);
            
            $filaAsign = $rsAsignatura->fetch_assoc();
                if($asignatura != $filaAsign['nombre_asignatura']){
                    $respuesta .= "<td class='fw-bold' onclick='fn_consumir_ws_getNotas(".$fila['asignatura_id'].");fn_consumir_ws_getFaltasAsistencia(".$fila['asignatura_id'].");fn_consumir_ws_getHorarios(".$fila['asignatura_id'].");'>".$filaAsign['nombre_asignatura']."</td>";
                } 
                $asignatura = $filaAsign['nombre_asignatura'];
    }
    $respuesta .= "</tr>";
    $respuesta .= "</table>";
    
        echo $respuesta;
    }

    function ListarNotas(){
        $idAlumno = $_REQUEST['idalumno'];
        $idMateria = $_REQUEST['idmateria'];
        $linkConect = mysqli_connect("localhost","root","","bd_colegio");
        

        $trimestre = 1;
        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center '>Notas</p>";
        $respuesta .= "<tr>";
        $respuesta .= "<td>Trimestre I</td><td>Trimestre II</td><td>Trimestre III</td>";
        $respuesta .= "</tr>";
        $respuesta .= "<tr>";
        $sql = "select aha_asignatura_id,nota from nota WHERE aha_alumno_id='$idAlumno' AND aha_asignatura_id='$idMateria' AND trimestre_nota='$trimestre'";
        $rs = $linkConect->query($sql);
        
        while($fila = $rs->fetch_assoc()){
            
            $respuesta .= "<td class='fw-bold'>".$fila['nota']."</td>";
            ++$trimestre;
            $sql = "select aha_asignatura_id,nota from nota WHERE aha_alumno_id='$idAlumno' AND aha_asignatura_id='$idMateria' AND trimestre_nota='$trimestre'";
            $rs = $linkConect->query($sql);
        }
        $respuesta .= "</tr>";
        $respuesta .= "</table>";
       
        echo $respuesta;
    }

    function ListarFaltaAsistencia(){
        $idAlumno = $_REQUEST['idalumno'];
        $idMateria = $_REQUEST['idmateria'];
        $linkConect = mysqli_connect("localhost","root","","bd_colegio");
        $sql = "select fecha_falAsistencia,justificada from falta_asistencia WHERE alumno_id='$idAlumno' AND asignatura_id='$idMateria'";
        $rs = $linkConect->query($sql);
        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center '>Faltas de Asistencia</p>";
        $respuesta .= "<tr>";
        $respuesta .= "<td>Fecha</td><td>Justificada</td>";
        $respuesta .= "</tr>";
        $respuesta .= "<tr>";
        while($fila = $rs->fetch_assoc()){
            $respuesta.= "<td class='fw-bold'>".$fila['fecha_falAsistencia']."</td><td class='fw-bold'>".$fila['justificada']."</td></tr><tr>";
        }
        $respuesta .= "</tr>";
        $respuesta .= "</table>";
        echo $respuesta;
    }

    function ListarHorarios(){
       
        $idMateria = $_REQUEST['idmateria'];
        $linkConect = mysqli_connect("localhost","root","","bd_colegio");
        $sql = "select dia_horario,dia_horaInicio,dia_horaFin from horario WHERE asignatura_id='$idMateria'";
        $rs = $linkConect->query($sql);
        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center '>Horario</p>";
        $respuesta .= "<tr>";
        $respuesta .= "<td>Día</td><td>Hora de Inicio</td><td>Hora de Fin</td>";
        $respuesta .= "</tr>";
        $respuesta .= "<tr>";
        while($fila = $rs->fetch_assoc()){
            $respuesta.= "<td class='fw-bold'>".$fila['dia_horario']."</td><td class='fw-bold'>".$fila['dia_horaInicio']."</td></td><td class='fw-bold'>".$fila['dia_horaFin']."</td></tr><tr>";
        }
        $respuesta .= "</tr>";
        $respuesta .= "</table>";
        echo $respuesta;
    }
   

?>