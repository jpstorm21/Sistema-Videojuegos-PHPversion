	<div id="pie" class="text-center">
		Sistema Realizado por Juan Pablo Martínez Romero.
	</div>

	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-notify/js/bootstrap-notify.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/DataTables/datatables.min.js"></script> 	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<?php 
		if(isset($js)){
			foreach($js as $key => $value){
				echo '<script type="text/javascript" src="'.base_url().$value.'"></script>';
			}
		}
	?>
</body>
</html>