<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class juegos extends CI_Model {
    
    public function __construct() {
		parent::__construct();
    }
    

    public function getJuegosPs4($data){
        $sql = "SELECT j.nombrejuego,p.nombreplataforma,uj.estado,j.idjuego
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                INNER JOIN plataforma p ON p.idplataforma = pj.idplataforma
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 1";
        $datos = $this->db->query($sql,$data);
        return $datos->result();
    }

    public function getJuegosPs4Terminados($data){
        $sql = "SELECT count(*) as ps4Terminados
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 1 AND uj.estado = 0";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }
    
    public function getJuegosPs4NoTerminados($data){
        $sql = "SELECT count(*) as ps4NoTerminados
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 1 AND uj.estado = 1";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }

    public function getJuegosSwitchTerminados($data){
        $sql = "SELECT count(*) as switchTerminados
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 2 AND uj.estado = 0";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }

    public function getJuegosSwitchNoTerminados($data){
        $sql = "SELECT count(*) as switchNoTerminados
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 2 AND uj.estado = 1";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }

    public function getJuegosSwitch($data){
        $sql = "SELECT j.nombrejuego,p.nombreplataforma,uj.estado,j.idjuego
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                INNER JOIN plataforma p ON p.idplataforma = pj.idplataforma
                WHERE uj.nombreusuario = ? AND pj.idplataforma = 2 ";
        $datos = $this->db->query($sql,$data);
        return $datos->result();
    }

    public function getCantjuegosPs4($data){
        $sql = "SELECT COUNT(*) as cantjuegosPs4
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma like 1";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }
    public function getCantjuegosSwitch($data){
        $sql = "SELECT COUNT(*) as cantjuegosSwitch
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                WHERE uj.nombreusuario = ? AND pj.idplataforma like 2";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }

    public function getCantJuegos($data){
        $sql = "SELECT COUNT(*) as cantJuegos
                FROM usuariojuego uj
                WHERE uj.nombreusuario = ?";
        $datos = $this->db->query($sql,$data);
        return $datos->row();
    }

    public function insertarJuego($data){
        $this->db->trans_start();

        $data2 = array("nombrejuego" => $data['nombrejuego'],"idcategoria" =>$data["categoria"]);
        $this->db->insert("juegos",$data2);
        
        $idjuego = $this->db->insert_id();

        $data3= array("idjuego"=>$this->db->insert_id(),"estado"=>$data['estado'],"nombreusuario"=>$data['nombreusuario']);
        $this->db->insert("usuariojuego",$data3);

        $data4= array("idjuego"=>$idjuego,"idplataforma"=>$data['plataforma']);
        $this->db->insert("plataformajuego",$data4);

        $this->db->trans_complete();
    }

    public function updateJuego($data){
        $this->db->trans_start();

        $data2 = array("nombrejuego" => $data['nombrejuego'],"idcategoria" =>$data["categoria"]);
        $this->db->where('idjuego', $data['idjuego']);
        $this->db->update('juegos', $data2);
        
        $data3= array("estado"=>$data['estado']);
        $this->db->where('idjuego', $data['idjuego']);
        $this->db->update('usuariojuego', $data3);

        $this->db->trans_complete();
    }

    public function deleteJuego($data){
        $this->db->trans_start();

        $this->db->delete('usuariojuego',array('idjuego'=>$data['idjuego'],'nombreusuario' => $data['usuario']));

        $this->db->trans_complete();
    }

    public function getInfoJuegoPs4ById($id){
        $sql = "SELECT j.nombrejuego,p.nombreplataforma,uj.estado,j.idjuego,c.nombrecategoria,c.idcategoria,p.idplataforma,j.idjuego
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                INNER JOIN plataforma p ON p.idplataforma = pj.idplataforma
                INNER JOIN categoria c ON j.idcategoria = c.idcategoria
                WHERE j.idjuego = ? AND pj.idplataforma = 1";
        $datos = $this->db->query($sql,$id);
        return $datos->result();
    }

    public function getInfoJuegoSwitchById($id){
        $sql = "SELECT j.nombrejuego,p.nombreplataforma,uj.estado,j.idjuego,c.nombrecategoria,c.idcategoria,p.idplataforma,j.idjuego
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                INNER JOIN plataforma p ON p.idplataforma = pj.idplataforma
                INNER JOIN categoria c ON j.idcategoria = c.idcategoria
                WHERE j.idjuego = ? AND pj.idplataforma = 2";
        $datos = $this->db->query($sql,$id);
        return $datos->result();
    }
}


?>