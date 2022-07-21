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
         $sql = "select aha_asignatura_id from nota where aha_alumno_id=".$idAlumno;
         $rs = $linkConect->query($sql);
        
        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center '>Asignaturas</p>";
        
        
        $asignatura = null;
        $respuesta .= "<tr>";
         while($fila = $rs->fetch_assoc()){
            $sql = "select nombre_asignatura,id_asignatura from asignatura where id_asignatura=".$fila['aha_asignatura_id'];
            $rsAsignatura = $linkConect->query($sql);
            
            $filaAsign = $rsAsignatura->fetch_assoc();
                if($asignatura != $filaAsign['nombre_asignatura']){
                    $respuesta .= "<td class='fw-bold' onclick='fn_consumir_ws_getNotas(".$fila['aha_asignatura_id'].");'>".$filaAsign['nombre_asignatura']."</td>";
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
        $sql = "select aha_asignatura_id,nota from nota WHERE aha_alumno_id='$idAlumno' AND aha_asignatura_id='$idMateria'";
        $rs = $linkConect->query($sql);

        $respuesta = "<table class='border border-dark table table-dark table-striped table-responsive table-hover'>";
        $respuesta .= "<p class='fs-4 text fw-bold text-dark text-center '>Notas</p>";
        $respuesta .= "<tr>";
        $respuesta .= "<td>Trimestre I</td><td>Trimestre II</td><td>Trimestre III</td>";
        $respuesta .= "</tr>";
        $respuesta .= "<tr>";
        while($fila = $rs->fetch_assoc()){
            
            $respuesta .= "<td class='fw-bold'>".$fila['nota']."</td>";
            
        }
        $respuesta .= "</tr>";
        $respuesta .= "</table>";
       
        echo $respuesta;
    }
   

?>