$(()=>{
    cargarJuegos()
});

const tabla = $("#tabla").DataTable({
    language: {
        url: host_url+'assets/js/utils_js/jquery.datatable.spanish.json'
    }, 
    columns: [
        { data: 'nombrejuego' },
        { data: 'nombreplataforma' },
        { data: 'estado' },
        { defaultContent: `<button type='button' name='editar' class='btn btn-primary'>
                                Editar
                                <i class="far fa-edit"></i>
                            </button>`},
        { defaultContent: `<button type='button' name='deleteButton' class='btn btn-danger'>
                                Eliminar
                                <i class="far fa-trash-alt"></i>
                            </button>`}
    ]
}); 

cargarJuegos = () =>{
    console.log('aaqui')
    let xhr = new XMLHttpRequest();
    xhr.open('get',host_url+'api/getGamesPs4');
    xhr.responseType ='json';
    xhr.addEventListener('load',()=>{
        if(xhr.status === 200){
            let data = xhr.response;
            console.log(data)
            tabla.clear();
            tabla.rows.add(data);
            tabla.draw();
        }else{
            swal({
                title: 'Error',
                icon: 'error',
                text: 'Error al cargar los juegos.'
            })
        }
    });
    xhr.send();
}
 
$('#tabla').on( 'click', 'button', function ()  {
    let data = tabla.row( $(this).parents('tr') ).data();
    console.log(data)
    swal({
        title: `Eliminar juego`,
        icon: 'warning',
        text: `¿Está seguro/a de Eliminar ${data.nombrejuego}?`,
        buttons: {
            confirm: {
                text: 'Eliminar',
                value: 'exec'
            },
            cancel: {
                text: 'Cancelar',
                value: 'cancelar',
                visible: true
            }
        }
    })
    .then(action => {
        if(action == 'exec') {
            eliminarJuego(data.idjuego);
        } else {
            swal.close();
        }
    })
});


eliminarJuego =(id) =>{
    console.log(id)
    let xhr = new XMLHttpRequest();
    xhr.open('delete', `eliminarJuego/${id}`);
    xhr.addEventListener('load',()=>{
        swal({
            title: 'Éxito!',
            icon: 'success',
            text: 'juego eliminado exitosamente',
        })
        .then(() => {
            document.location.href = 'http://localhost:8088/ProyectoJuegos/panel/cargarPanelPrincipal'
        })
    });
    xhr.send();
}



PDF = () =>{
    swal({
        title: 'Éxito!',
        icon: 'success',
        text: 'PDF generado exitosamente',
    })
    
}

$("#pdf").on('click',PDF)
