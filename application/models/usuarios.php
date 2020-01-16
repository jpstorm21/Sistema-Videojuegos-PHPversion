<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Model {

    public function __construct() {
		parent::__construct();
	}

    public function ingresarUsuario($data){
        $sql = "SELECT nombreusuario,passwd,nombres
                FROM   usuario
                WHERE  nombreusuario = ? and passwd = ?";
        $datos = $this->db->query($sql,array($data['nombreUsuario'],$data['passWd']));
        return $datos->result();
    }

    public function registarUsuarios($data){
        $this->db->trans_start();
        $sql = "INSERT INTO usuario (nombreusuario,passwd,nombres,apellidos,email) VALUES (?,?,?,?,?)";
        $this->db->query($sql,array($data["nombreUsuario"],$data["pass"],$data["nombres"],$data["apellidos"],$data["email"]));
        $this->db->trans_complete();
    }

    public function getInfoUsuario($data){
        $sql = "SELECT nombres,apellidos,passwd,email
                FROM   usuario
                WHERE  nombreusuario = ?";
        $datos = $this->db->query($sql,$data);
        return $datos->result();
    }

    public function updatePerfil($data){
        $this->db->trans_start();
        $dataAux;
        if($data['passwd'] == ''){
            $dataAux = array('nombres' =>$data['nombres'],'apellidos'=>$data['apellidos'],'email' =>$data['email']);
            $this->db->where('nombreusuario', $this->session->userdata('nombreusuario'));
            $this->db->update('usuario', $dataAux);
        }else{
            $this->db->where('nombreusuario', $this->session->userdata('nombreusuario'));
            $this->db->update('usuario', $data);
        }
        $this->db->trans_complete();
    }

}
?>