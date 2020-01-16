<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Model {
    
    public function __construct() {
		  parent::__construct();
    }

  public function getCategorias(){
      $sql = "SELECT idcategoria,nombrecategoria
              FROM categoria";
      $datos = $this->db->query($sql);
      return $datos->result();
  }

  public function insertarCategoria($data){
    $this->db->trans_start();

    $data2 = array("nombrecategoria" => $data['categoria']);
    $this->db->insert("categoria",$data2);

    $this->db->trans_complete();
  }
}

?>