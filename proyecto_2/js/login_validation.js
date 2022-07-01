function setup(){
    document.getElementById("alertLogin").style.display = "none";
}

function  validInfo(){
    
    if (document.getElementById("usuario").value == '' || document.getElementById("contraseña").value == '') {
        document.getElementById("alertLogin").style.display = "";
    }
    
}