	
   <div id="cuerpo" class="container-fluid">	
		<div class="row">
         <div class="col-md-3" id="panelMenu">
            <div class="list-group">
               <a href="<?php echo base_url()?>panel/cargarPanelPrincipal" class="list-group-item list-group-item-action  ">Resumen general</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosPs4" class="list-group-item list-group-item-action">Listado de Juegos Playstation 4</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosSwitch" class="list-group-item list-group-item-action">Listado de Juegos Nintendo Switch</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroJuegos" class="list-group-item list-group-item-action ">Agregar Juegos</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroCategorias" class="list-group-item list-group-item-action">Agregar Categorias</a>
               <a id="pdf" href="<?php echo base_url()?>pdfController/pdf" class="list-group-item list-group-item-action">Generar reporte</a>
            </div>
         </div>
         <div class="col-md-9" id="panelPrincipal">
            <div class="card">
               <div class="card-header">Perfil usuario</div>
               <div class="body" style="margin:25px">
                  <form method = "POST" action ="<?php echo base_url()."panel/actualizarPerfil"?>">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Nombres </label>
                            <input type="text" id="nombres" name="nombres" class="form-control" value="<?php echo ($perfilInfo  ? $perfilInfo[0]->nombres : '') ?>" >
                            <div class="invalid-feedback nombres" style="display: none">
                                Escriba sus nombre porfavor.
                            </div>
                        </div>                  
                        <div class="col-6">
                            <label>Apellidos </label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo ($perfilInfo  ? $perfilInfo[0]->apellidos : '') ?>" >
                            <div class="invalid-feedback apellidos" style="display: none">
                                Escriba sus apellidos porfavor.
                            </div>
                        </div>                  
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Contraseña </label>
                            <input type="password" id="pass" name="pass" class="form-control" value="" >
                            <div class="invalid-feedback passDis1" style="display: none">
                                Contraseña no coinciden.
                            </div>
                        </div>                  
                        <div class="col-6">
                            <label>Repetir Contraseña </label>
                            <input type="password" id="passConfirm" name="passConfirm" class="form-control" value="" >
                            <div class="invalid-feedback passDis2" style="display: none">
                                Contraseña no coinciden.
                            </div>
                        </div>                  
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Correo </label>
                            <input type="text" id="correo" name="correo" class="form-control" value="<?php echo ($perfilInfo  ? $perfilInfo[0]->email : '') ?>" >
                            <div class="invalid-feedback correo" style="display: none">
                                Escriba un correo porfavor.
                            </div>
                        </div>                               
                    </div>

                   
					
					<input type="submit" id="guardarPerfil" class = "btn btn-primary" value = "<?php echo ($perfilInfo ? 'Actualizar' : 'Registrar') ?>">

                  </form>
               </div>
            </div>
            
         </div>
      </div>
	</div>