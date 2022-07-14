function ValidarFrmRegistro(){
    var pass1 = document.getElementById('txtPass').value;
    var pass2 = document.getElementById('txtRPass').value;

    if (pass1 == pass2) {
        document.forms["frmRegistro"].submit();
        
    }else{
    alert('Error, passwords diferentes! verifique...');
    }
}