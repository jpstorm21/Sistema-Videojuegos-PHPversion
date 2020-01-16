	
   <div id="cuerpo" class="container-fluid mb-2">	
		<div class="row">
         <div class="col-md-3" id="panelMenu">
            <div class="list-group">
               <a href="<?php echo base_url()?>panel/cargarPanelPrincipal" class="list-group-item list-group-item-action  ">Resumen general</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosPs4" class="list-group-item list-group-item-action">Listado de Juegos Playstation 4</a>
               <a href="<?php echo base_url()?>panel/cargarPanelJuegosSwitch" class="list-group-item list-group-item-action">Listado de Juegos Nintendo Switch</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroJuegos" class="list-group-item list-group-item-action active">Agregar Juegos</a>
               <a href="<?php echo base_url()?>Formularios/cargarFormularioRegistroCategorias" class="list-group-item list-group-item-action">Agregar Categorias</a>
               <a id="pdf" href="<?php echo base_url()?>pdfController/pdf" class="list-group-item list-group-item-action">Generar reporte</a>
            </div>
         </div>
         <div class="col-md-9" id="panelPrincipal">
            <div class="card">
               <div class="card-header">Registrar Juegos</div>
               <div class="body" style="margin:25px">
                  <form method = "POST" action ="<?php echo base_url()."panel/".($juegoInfo == NULL ? 'insertJuegoForm': "actualizarJuego/".$juegoInfo[0]->idjuego)?>">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Nombre del juego </label>
                            <input type="text" id="juego" name="juego" class="form-control" value="<?php echo ($juegoInfo  ? $juegoInfo[0]->nombrejuego : '') ?>" >
                            <div class="invalid-feedback juego" style="display: none">
                           Escriba un nombre porfavor.
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label>Plataforma </label>
                            <select id="plataforma" name="plataforma" class="form-control" <?php echo $juegoInfo != NULL ? 'disabled': '' ?>>
                                <option id="0" value="0">Seleccione una plataforma</option>
                                <?php 
                                 foreach($plataformas as $key =>$value){
                                    echo '<option value="'.$value->idplataforma.'"';
                                    if($juegoInfo != NULL && $juegoInfo[0]->idplataforma == $value->idplataforma){
                                       echo "selected";
                                    }
                                    echo '>'.$value->nombreplataforma.'</option>';
                                 }
                                ?>
                            </select>
                            <div class="invalid-feedback plataforma" style="display: none">
                           Seleccione una plataforma porfavor.
                        </div>
                        </div>
                    </div>

                     <div class="row mb-3">
                        <div class="col-6">
                           <label>Estado de juego</label>
                           <select id="estado" name ="estado"class="form-control">
                              <option id="0">seleccione un estado </option>
                              <?php 
                                 if($juegoInfo){
                                    if($juegoInfo[0]->estado == 0){
                                       echo "<option id='1' value ='0' selected>Juego terminado </option>";
                                       echo "<option id='2' value='1'>juego en progreso </option>";
                                    }else{
                                       echo "<option id='1' value ='0'>Juego terminado </option>";
                                       echo "<option id='2' value='1' selected>juego en progreso </option>";
                                    }
                                 }else{
                                    echo "<option id='1' value ='0'>Juego terminado </option>";
                                    echo "<option id='2' value='1'>juego en progreso </option>";
                                 }
                              ?>
                           </select>
                           <div class="invalid-feedback estado" style="display: none">
                          Seleccione un estado porfavor.
                        </div>
                        </div>
                        <div class="col-6">
                           <label>Categoria</label>
                           <select id="categoria" name ="categoria"class="form-control">
                              <option id="0" value ="0">seleccione una categoria </option>
                              <?php 
                                 foreach($categorias as $key =>$value){
                                    echo '<option value="'.$value->idcategoria.'"';
                                    if($juegoInfo != NULL && $juegoInfo[0]->idcategoria == $value->idcategoria){
                                       echo "selected";
                                    }
                                    echo '>'.$value->nombrecategoria.'</option>';
                                 }
                                ?>
                           </select>
                           <div class="invalid-feedback categoria" style="display: none">
                           Seleccione una categoria porfavor.
                        </div>
                        </div>
                     </div>
					
							<input type="submit" id="guardarJuego" class = "btn btn-primary" value = "<?php echo ($juegoInfo ? 'Actualizar' : 'Registrar') ?>">

                  </form>
               </div>
            </div>
            
         </div>
      </div>
	</div>