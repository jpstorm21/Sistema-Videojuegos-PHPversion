	
   <div id="cuerpo" class="container-fluid">	
		<div class="row">
         <div class="col-md-3" id="panelMenu">
            <div class="list-group">
               <a href="<?php echo base_url()?>panel/cargarPanelPrincipal" class="list-group-item list-group-item-action  ">Resumen general</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosPs4" class="list-group-item list-group-item-action active">Listado de Juegos Playstation 4</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosSwitch" class="list-group-item list-group-item-action">Listado de Juegos Nintendo Switch</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroJuegos" class="list-group-item list-group-item-action">Agregar Juegos</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroCategorias" class="list-group-item list-group-item-action">Agregar Categorias</a>
               <a id="pdf" href="<?php echo base_url()?>pdfController/pdf" class="list-group-item list-group-item-action">Generar reporte</a>
            </div>
         </div>
         <div class="col-md-9" id="panelPrincipal">
            <div class="card">
               <div class="card-header mb-3">Listado de Juegos PS4</div>
               <div class="body mb-2">
                  <div class="col-sm-12">
                     <table class="table table-bordered" id="tabla">
                       <thead>
                        <th>Nombre del juego</th>
                        <th>Plataforma</th>
                        <th>Estado</th>             
                        <th>Editar</th>             
                        <th>Eliminar</th>            
                      </thead>
                      
                     </table>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
 