$(()=>{

});

registerForm = () =>{
    $(`.categoria`).hide();
    let nomCategoria = $("#categoria").val();
    let valid = true;

    if(nomCategoria == ''){
        $(`.categoria`).show();
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
            text: 'categoria guardara exitosamente',
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

$("#guardarCategoria").on('click',registerForm)