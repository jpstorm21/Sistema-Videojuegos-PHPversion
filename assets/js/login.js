$(()=>{

});


login = () =>{
    $(`.username`).hide();
    $(`.password`).hide();
    let rut = $("#username").val();
    let pass = $("#password").val();
    
    let valid = true;

    if(rut == ''){
        $(`.username`).show();
        valid = false;
    }
    if(pass == ''){
        $(`.password`).show();
        valid =false;
    }

    if(!valid){
        event.preventDefault()
        swal({
            title: 'Error',
            icon: 'error',
            text: 'Rut o contraseña incorrectos.'
        });
    }else{
        swal({
            title: 'Éxito!',
            icon: 'success',
            text: 'Inicio de sesion correctamente',
        })
    }

}

$("#login").on('click',login)