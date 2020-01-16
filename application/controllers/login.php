<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function iniciarSesion(){
		$user = $this->input->post('username');
		$pass = $this->input->post('pass');
		$this->load->model('usuarios');
		$datos = array("nombreUsuario" => $user,
		               "passWd" => $pass );
		$result = $this->usuarios->ingresarUsuario($datos);
		if(!empty($result)){
			if($result[0]->nombreusuario == $user && $result[0]->passwd == $pass){	
				$dataSesion = array('nombreusuario' =>$result[0]->nombreusuario,
									 'nombres' =>$result[0]->nombres,
									 'login' => true );
				$this->session->set_userdata($dataSesion);
				$this->load->model('juegos');
				sleep(2);
				$cantTotalJuegos = $this->juegos->getCantJuegos($this->session->userdata('nombreusuario'));
				$cantTotalJuegosPs4 = $this->juegos->getCantjuegosPs4($this->session->userdata('nombreusuario'));
				$cantTotalJuegosSwitch = $this->juegos->getCantjuegosSwitch($this->session->userdata('nombreusuario'));
				$cantTotalJuegosPs4Terminados = $this->juegos->getJuegosPs4Terminados($this->session->userdata('nombreusuario'));
				$cantTotalJuegosPs4NoTerminados = $this->juegos->getJuegosPs4NoTerminados($this->session->userdata('nombreusuario'));
				$cantTotalJuegosSwitchTerminados = $this->juegos->getJuegosSwitchTerminados($this->session->userdata('nombreusuario'));
				$cantTotalJuegosSwitchNoTerminados = $this->juegos->getJuegosSwitchNoTerminados($this->session->userdata('nombreusuario'));
				$this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
				$this->load->view("panel/principal",array('cantTotal' => $cantTotalJuegos,'cantJuegosPs4' =>$cantTotalJuegosPs4,'cantJuegosSwitch'=>$cantTotalJuegosSwitch, 
														'ps4terminados'=>$cantTotalJuegosPs4Terminados,'ps4noterminados'=>$cantTotalJuegosPs4NoTerminados,
														'switchterminados'=>$cantTotalJuegosSwitchTerminados,'switchnoterminados'=>$cantTotalJuegosSwitchNoTerminados));
				$this->load->view('layout/footer');	
			}
		}else{
			$this->load->view('index',array("error" => true));
		}
	}

	public function cerrarSesion(){
		$dataSesion = array('nombreusuario' =>"",
							'nombres' =>"",
							'login' => false );
		$this->session->unset_userdata($dataSesion);
		$this->session->sess_destroy();
		$this->load->view('index',array("error" => false));	
	}
}
	
?>