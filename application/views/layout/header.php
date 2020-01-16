<!DOCTYPE html>
<html>
<head>
	<!-- Propiedad para los caracteres españoles -->
	<meta charset="utf-8">
	<!-- Permite cambiar la vista de móvil a PC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/icons/descarga.ico"/>
	<title>Menu Principal</title>
	<!-- CSS de Bootstrap. Luego de este van todos los css de la página-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">


   <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-notify/css/bootstrap-notify.css" rel="stylesheet" type="text/css"/>  
   <link href="<?php echo base_url(); ?>assets/vendor/DataTables/datatables.min.css" rel="stylesheet" type="text/css"/>
   <script>const host_url = "<?php echo base_url(); ?>";</script>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url()."panel/cargarPanelPrincipal"?>">Sistema de administracion de videoJuegos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          
         </ul>

         <div class="navbar-nav">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong> Bienvenido/a <?php echo $nombres?></strong>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="<?php echo base_url()."/Formularios/cargarFormularioPerfil"?>">Editar Perfil</a>
                 <a class="dropdown-item" href="<?php echo base_url()."/login/cerrarSesion"?>">Cerrar Sesión</a>
              </div>
            </div>
         </div>
      </div>
   </nav>
