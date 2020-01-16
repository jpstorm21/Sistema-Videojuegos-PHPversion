
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
				<form class="login100-form validate-form" method = "post" action = "<?php echo base_url()?>login/iniciarSesion">
					<span class="login100-form-title p-b-49">
						Inicio de Sesión
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired" >
						<span class="label-input100">Nombre de Usuario</span>
						<input class="input100" type="text"  id ="username" name="username" placeholder="Ingrese Nombre de Usuario">
						<span class="focus-input100" data-symbol="&#xf206;"></span>			
						<div class="invalid-feedback username" style="display: none">
							Escriba su nombre de usuario porfavor.
						</div>
					</div>

					
					<div class="wrap-input100 validate-input" data-validate="Password is required" >
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" id ="password" placeholder="Ingrese Contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<div class="invalid-feedback password" style="display: none">
							Escriba su contraseña porfavor.
						</div>
					</div>
		
					<div class="text-right p-t-8 p-b-31">
				
					</div>
					
					<div class="container-login100-form-btn">
					
							<input type="submit" class = "btn btn-primary" id="login" value = "Iniciar sesion">
						
					</div>
			
					<div class="txt1 text-center p-t-54 p-b-20">
						<a href ="<?php echo base_url()?>Formularios/cargarFormularioRegistro">¿No tienes cuenta, registrate haciendo click aqui!!!?</a>	
					</div>

					<div class="flex-c-m">
						<a  href="https://www.facebook.com/juanpablo.martinezromero.14" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>
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
	<script src="<?php echo base_url();?>/assets/js/login.js"></script>
</body>
</html>