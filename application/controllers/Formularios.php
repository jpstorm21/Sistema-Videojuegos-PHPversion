<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formularios extends CI_Controller {

    public function cargarFormularioRegistro(){
        $this->load->view("Formularios/RegistroUsuario", array("error" => false));
    }

    public function registroUsuarioController(){
        $this->load->model('usuarios');
        $userName = $this->input->post('username');
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $email = $this->input->post('correo');
        $pass = $this->input->post('pass');
        $conPass = $this->input->post('passConfirm');
        if($pass != $conPass){
            $this->load->view('Formularios/RegistroUsuario',array("error" => true));
        }else{
            $datos = array( "nombreUsuario" => $userName,
                            "nombres" => $nombres,
                            "apellidos" => $apellidos,
                            "email" => $email,
                            "pass" => $pass,
                            "passConfirm" => $conPass);
            $this->usuarios->registarUsuarios($datos);
            sleep(2);
            header("Location: ".base_url()."Welcome/index");
        }
    }

    public function cargarFormularioRegistroJuegos(){
        $juegoInfo = NULL;

        $js = array('assets/js/juegos.js');
        
        $this->load->model('plataforma');
        $datos = $this->plataforma->getPlataformas();

        $this->load->model('categorias');
        $datosCate = $this->categorias->getCategorias();

        $this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
        $this->load->view("Formularios/RegistroJuegos",array("plataformas" => $datos,"categorias"=>$datosCate,"juegoInfo"=>$juegoInfo));
		$this->load->view('layout/footer',array('js' => $js));	
    }

    public function cargarFormularioPs4($id = -1){
        $juegoInfo = NULL;
        if($id != -1){
            $this->load->model('juegos');
            $juegoInfo = $this->juegos->getInfoJuegoPs4ById($id);
        }
        
        $js = array('assets/js/juegos.js');

        $this->load->model('plataforma');
        $datos = $this->plataforma->getPlataformas();

        $this->load->model('categorias');
        $datosCate = $this->categorias->getCategorias();

        $this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
        $this->load->view("Formularios/RegistroJuegos",array("plataformas" => $datos,"categorias"=>$datosCate,"juegoInfo"=>$juegoInfo));
		$this->load->view('layout/footer',array('js' => $js));	
    }

    public function cargarFormularioSwitch($id = -1){
        $juegoInfo = NULL;
        if($id != -1){
            $this->load->model('juegos');
            $juegoInfo = $this->juegos->getInfoJuegoSwitchById($id);
        }

        $js = array('assets/js/juegos.js');

        $this->load->model('plataforma');
        $datos = $this->plataforma->getPlataformas();

        $this->load->model('categorias');
        $datosCate = $this->categorias->getCategorias();

        $this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
        $this->load->view("Formularios/RegistroJuegos",array("plataformas" => $datos,"categorias"=>$datosCate,"juegoInfo"=>$juegoInfo));
		$this->load->view('layout/footer',array('js' => $js));	
    }

    public function cargarFormularioRegistroCategorias(){
        $js = array('assets/js/categoria.js');
        $this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
        $this->load->view("Formularios/RegistrarCategorias");
		$this->load->view('layout/footer',array('js' => $js));	
    }

    public function cargarFormularioPerfil(){
        $perfilInfo = NULL;

        $this->load->model('usuarios');
        $perfilInfo = $this->usuarios->getInfoUsuario($this->session->userdata('nombreusuario'));
     

        $js = array('assets/js/perfil.js');
        $this->load->view('layout/header',array("nombres" =>$this->session->userdata('nombres')));
        $this->load->view("Formularios/perfil",array("perfilInfo"=>$perfilInfo));
		$this->load->view('layout/footer',array('js' => $js));	
    }

}
?>
