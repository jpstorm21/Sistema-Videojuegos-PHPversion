$(()=>{

});

registerForm = () =>{
    $(`.username`).hide();
    $(`.nombres`).hide();
    $(`.apellidos`).hide();
    $(`.correo`).hide();
    $(`.pass`).hide();
    $(`.passConfirm`).hide();
    let nombreusuario = $("#username").val();
    let nombres = $("#nombres").val();
    let apellidos = $("#apellidos").val();
    let correo = $("#correo").val();
    let pass = $("#pass").val();
    let passConfirm = $("#passConfirm").val();
    let valid = true;

    if(nombreusuario == ''){
        $(`.username`).show();
        valid = false;
    }
    if(nombres == ''){
        $(`.nombres`).show();
        valid = false;
    }
    if(apellidos == ''){
        $(`.apellidos`).show();
        valid = false;
    }
    if(correo == ''){
        $(`.correo`).show();
        valid = false;
    }
    if(pass == ''){
        $(`.pass`).show();
        valid = false;
    }
    if(passConfirm == ''){
        $(`.passConfirm`).show();
        valid = false;
    }

    if(!valid){
        event.preventDefault()
        swal({
            title: 'Error',
            icon: 'error',
            text: 'Campo se encuetra vacio.'
        });
    }else{
        swal({
            title: 'Éxito!',
            icon: 'success',
            text: 'Registro exitosamente',
        })
    }
}

$("#registrarUsuario").on('click',registerForm)