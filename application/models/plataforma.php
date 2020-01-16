<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plataforma extends CI_Model {
    
    public function __construct() {
		  parent::__construct();
    }

  public function getPlataformas(){
      $sql = "SELECT idplataforma,nombreplataforma
              FROM plataforma";
      $datos = $this->db->query($sql);
      return $datos->result();
  }
}

?>