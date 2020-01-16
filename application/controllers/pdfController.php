<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class pdfController extends CI_Controller {

        public function pdf(){
            $this->load->model('pdfModel');
            sleep(2);
            $this->pdfModel->generarPdf($this->session->userdata('nombreusuario'));
        }
    }
?>