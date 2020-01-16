<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panel extends CI_Controller {


	public function cargarPanelPrincipal(){
		$this->load->model('juegos');
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
	
	public function cargarPanelJuegosPs4(){
		
		$js = array('assets/js/tablas.js');
		
		$this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
		$this->load->view("panel/tabla");
		$this->load->view('layout/footer',array('js' => $js));
	}

	public function cargarJuegosPs4(){
		$this->load->model('juegos');
		$result = $this->juegos->getJuegosPs4($this->session->userdata('nombreusuario'));
		$this->response->sendJSONResponse($result);
	}

	public function cargarPanelJuegosSwitch(){
		$this->load->model('juegos');
		$data = $this->juegos->getJuegosSwitch($this->session->userdata('nombreusuario'));
		
		$js = array('assets/js/tablas.js');

		$this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
		$this->load->view("panel/tablaSwitch",array("tabla_juegos" => $data));
		$this->load->view('layout/footer',array('js' => $js));	
	}

	public function insertJuegoForm(){
		$this->load->model('juegos');
		$nomJuego = $this->input->post('juego');
		$estado = $this->input->post('estado');
		$plataforma = $this->input->post('plataforma');
		$categoria = $this->input->post('categoria');

		$data = array("nombrejuego" => $nomJuego,"estado"=>$estado,"plataforma"=>$plataforma,"nombreusuario"=>$this->session->userdata('nombreusuario'),"categoria"=>$categoria);
		$this->juegos->insertarJuego($data);
		sleep(2);
		$this->cargarPanelPrincipal();
	}

	public function actualizarJuego($id){
		$this->load->model('juegos');
		$nomJuego = $this->input->post('juego');
		$estado = $this->input->post('estado');
		$plataforma = $this->input->post('plataforma');
		$categoria = $this->input->post('categoria');

		$data = array("nombrejuego" => $nomJuego,"estado"=>$estado,"plataforma"=>$plataforma,"nombreusuario"=>$this->session->userdata('nombreusuario'),"categoria"=>$categoria,"idjuego" =>$id);
		$this->juegos->updateJuego($data);
		sleep(2);
		$this->cargarPanelPrincipal();

	}

	public function insertCategoria(){
		$this->load->model('categorias');
		$categoria = $this->input->post('categoria');

		$data = array("categoria"=>$categoria);
		$this->categorias->insertarCategoria($data);
		sleep(2);
		$this->cargarPanelPrincipal();
	}

	public function eliminarJuego($id){
		$this->load->model('juegos');
		$data = array('idjuego'=>$id,'usuario'=>$this->session->userdata('nombreusuario'));
		$this->juegos->deleteJuego($data);
		sleep(1);
	}

	public function actualizarPerfil(){
		$this->load->model('usuarios');
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $email = $this->input->post('correo');
        $pass = $this->input->post('pass');
        $conPass = $this->input->post('passConfirm');
		$datos = array( "nombres" => $nombres,
						"apellidos" => $apellidos,
						"email" => $email,
						"passwd" => $pass);

		$this->usuarios->updatePerfil($datos);
		sleep(1);
		$this->cargarPanelPrincipal();
	}

}
	
?>