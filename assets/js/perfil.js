$(()=>{

});

registerForm = () =>{
    $(`.nombres`).hide();
    $(`.apellidos`).hide();
    $(`.pass`).hide();
    $(`.passConfirm`).hide();
    $(`.correo`).hide();
    $(`.passDis1`).hide();
    $(`.passDis2`).hide();
    let nombres = $("#nombres").val();
    let apellidos = $("#apellidos").val();
    let correo = $("#correo").val();
    let pass = $("#pass").val();
    let passConfirm = $("#passConfirm").val();
    let valid = true;

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
    if(pass != passConfirm){
        $(`.passDis1`).show();
        $(`.passDis2`).show();
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
            text: 'Cambios guardados exitosamente',
        })
    }
}
PDF = () =>{
    swal({
        title: 'Éxito!',
        icon: 'success',
        text: 'PDF generado exitosamente',
    })
    
}

$("#pdf").on('click',PDF)

$("#guardarPerfil").on('click',registerForm)