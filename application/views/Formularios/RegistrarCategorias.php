	
   <div id="cuerpo" class="container-fluid">	
		<div class="row">
         <div class="col-md-3" id="panelMenu">
            <div class="list-group">
               <a href="<?php echo base_url()?>panel/cargarPanelPrincipal" class="list-group-item list-group-item-action  ">Resumen general</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosPs4" class="list-group-item list-group-item-action">Listado de Juegos Playstation 4</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosSwitch" class="list-group-item list-group-item-action">Listado de Juegos Nintendo Switch</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroJuegos" class="list-group-item list-group-item-action">Agregar Juegos</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroCategorias" class="list-group-item list-group-item-action active">Agregar Categorias</a>
               <a id="pdf" href="<?php echo base_url()?>pdfController/pdf" class="list-group-item list-group-item-action">Generar reporte</a>
            </div>
         </div>
         <div class="col-md-9" id="panelPrincipal">
            <div class="card">
               <div class="card-header">Registrar Categorias</div>
               <div class="body" style="margin:25px">
                  <form method = "POST" action ="<?php echo base_url()?>panel/insertCategoria">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Nombre de la categoria </label>
                            <input type="text" id="categoria" name="categoria" id="categoria" class="form-control">
                        <div class="invalid-feedback categoria" style="display: none">
                           Escriba una categoria porfavor.
                        </div>
                        </div>
                    </div>

						<input type="submit" class = "btn btn-primary" id="guardarCategoria" value = "Registrar">

                  </form>
               </div>
            </div>
            
         </div>
      </div>
	</div>