
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de administracion de videojuegos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/icons/descarga.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/img/juegos.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form"method ="post" action = "<?php echo base_url()?>Formularios/registroUsuarioController">
					<span class="login100-form-title p-b-49">
						Registro de Usuario
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Nombre de Usuario</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Ingrese Nombre de Usuario">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						<div class="invalid-feedback username" style="display: none">
                           Escriba un nombre de usuario porfavor.
                        </div>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "nombres is reauired">
						<span class="label-input100">Nombres</span>
						<input class="input100" type="text" name="nombres" id="nombres" placeholder="Ingrese Nombres">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						<div class="invalid-feedback nombres" style="display: none">
                           Escriba sus nombres porfavor.
                        </div>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "apellidos is reauired">
						<span class="label-input100">Apellidos</span>
						<input class="input100" type="text" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						<div class="invalid-feedback apellidos" style="display: none">
                           Escriba sus apellidos porfavor.
                        </div>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "correo is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="correo" id="correo" placeholder="Ingrese Email">
						<span class="focus-input100" data-symbol="&#9993;"></span>
						<div class="invalid-feedback correo" style="display: none">
                           Escriba un correo porfavor.
                        </div>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Ingrese Contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<div class="invalid-feedback pass" style="display: none">
                           Escriba un contraseña porfavor.
                        </div>
                    </div>
					<?php 
						if($error){
							echo '<h6 style="color:red">Contraseña no coinciden</h6>';
						}
					
					?>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Repetir contraseña</span>
						<input class="input100" type="password" name="passConfirm" id="passConfirm" placeholder="Repita Contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<div class="invalid-feedback passConfirm" style="display: none">
                           Repita su contraseña porfavor.
                        </div>
                    </div>
					<?php 
						if($error){
							echo '<h6 style="color:red">Contraseña no coinciden</h6>';
						}
					
					?>
                                        
					<div class="text-right p-t-8 p-b-31">
				
					</div>				
                        <div class ="row">
                        <button type="submit" style = "margin-left : 5%" id="registrarUsuario" class="btn btn-primary">Registrarse</button>
                        <a href ="<?php echo base_url()?>"><button type="button"  style = "margin-left : 20%" class="btn btn-secondary">Cancelar</button></a>
                    </div>
				</form>
			</div>
		</div>
	</div>	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/usuarios.js"></script>

</body>
</html>