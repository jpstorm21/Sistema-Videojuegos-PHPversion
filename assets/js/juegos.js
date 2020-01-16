$(()=>{
});

registerForm = () =>{
    $(`.juego`).hide();
    $(`.estado`).hide();
    $(`.categoria`).hide();
    $(`.plataforma`).hide();
    let nomJuego = $("#juego").val();
    let plataforma = $("#plataforma option:selected").val();
    let estado = $("#estado option:selected").attr('id');
    let categoria = $("#categoria option:selected").val();
    console.log(plataforma)
    let valid = true;

    if(nomJuego == ''){
        $(`.juego`).show();
        valid = false;
    }
    if(plataforma == 0){
        $(`.plataforma`).show();
        valid = false;
    }
    if(estado == 0){
        $(`.estado`).show();
        valid = false;
    }
    if(categoria == 0){
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
            text: 'Juego guardado exitosamente',
            button:'ok'
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

$("#guardarJuego").on('click',registerForm)