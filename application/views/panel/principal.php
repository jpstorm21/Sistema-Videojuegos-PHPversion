
	<div id="cuerpo" class="container-fluid">	
		<div class="row">
         <div class="col-md-3 mb-3" id="panelMenu">
            <div class="list-group">
               <a href="<?php echo base_url()?>panel/cargarPanelPrincipal" class="list-group-item list-group-item-action active">Resumen general</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosPs4" class="list-group-item list-group-item-action">Listado de Juegos Playstation 4</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosSwitch" class="list-group-item list-group-item-action">Listado de Juegos Nintendo Switch</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroJuegos" class="list-group-item list-group-item-action">Agregar Juegos</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroCategorias" class="list-group-item list-group-item-action">Agregar Categorias</a>
               <a id="pdf" href="<?php echo base_url()?>pdfController/pdf" class="list-group-item list-group-item-action">Generar reporte</a>
            </div>
         </div>
         <div class="col-md-9" id="panelPrincipal">
            <div class="card">
               <div class="card-header mb-2">Resumen general</div>
               <div class="body">
                  <div class="col-sm-12">
                     <p><strong>Cantidad de Total de juegos: </strong><?php echo $cantTotal->cantJuegos?></p>
                     <p><strong>Cantidad de Total de juegos Playstation 4: </strong><?php echo $cantJuegosPs4->cantjuegosPs4 ?></p>
                     <p><strong>Cantidad de Total de juegos Nintendo Switch : </strong><?php echo $cantJuegosSwitch->cantjuegosSwitch ?></p>
                     <p><strong>Cantidad de juegos terminados Playstation 4: </strong><?php echo $ps4terminados->ps4Terminados ?></p>
                     <p><strong>Cantidad de juegos por terminar Playstation 4: </strong><?php echo $ps4noterminados->ps4NoTerminados ?></p>
                     <p><strong>Cantidad de juegos terminados Nintendo Switch: </strong><?php echo $switchterminados->switchTerminados ?></p>
                     <p><strong>Cantidad de juegos por terminar Nintendo Switch: </strong><?php echo $switchnoterminados->switchNoTerminados ?></p>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
	</div>
