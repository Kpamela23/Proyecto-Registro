

function validarCampoVacioCuenta(campo){
    if (campo.value==""){
        campo.classList.add("campo-invalido");
        cambioColor(campo);
        
    }else{
        return true;
    }
}

function validarCampoVacioPassword(campo){
    if (campo.value==""){
        campo.classList.add("campo-invalido");
        cambioColor(campo);
        
    }else{
        return true;
    }
}

function registrar(){
    if(
        !validarCampoVacioCuenta(document.getElementById("num-cuenta")) &&
        !validarCampoVacioPassword(document.getElementById("password")) == false
    ){
        return;
    }else{
        !validarCampoVacioCuenta(document.getElementById("num-cuenta")) ||
        !validarCampoVacioPassword(document.getElementById("password"))
    }
}


function cambioColor(elemento){
    if($(elemento).val() == "" ){
        $(elemento).css("border-color","red");
    }
}

