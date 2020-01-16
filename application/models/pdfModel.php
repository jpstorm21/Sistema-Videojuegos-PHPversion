<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfModel extends CI_Model {
    
    public function __construct() {
		  parent::__construct();
    }

    public function generarPdf($data){

        $sql = "SELECT j.nombrejuego,p.nombreplataforma,uj.estado
                FROM juegos j INNER JOIN usuariojuego uj ON j.idjuego = uj.idjuego
                INNER JOIN plataformajuego pj ON j.idjuego = pj.idjuego
                INNER JOIN plataforma p ON p.idplataforma = pj.idplataforma
                WHERE uj.nombreusuario = ?";
        $datos = $this->db->query($sql,$data);
        $resultado = $datos->result();

        $this->load->library('FPDF');
        $pdf = new FPDF();
        //header PDF
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->Image(base_url()."/assets/img/logoUCN.png",10,8,33);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(60);
        $pdf->Cell(60,10,'Reporte de videojuegos',0,0,'C',1);
        $pdf->Ln(35);

        //BODY PDF
        $pdf->Cell(60,6,'Nombre',1,0,'C',1);
        $pdf->Cell(60,6,'Estado',1,0,'C',1);
        $pdf->Cell(60,6,'Plataforma',1,1,'C',1);
        
        foreach($resultado as $key=>$value ){
            $pdf->Cell(60,6,$value->nombrejuego,1,0,'C',0);
            $estado;
            if($value->estado){
                $pdf->Cell(60,6,"En juego",1,0,'C',0);
            }else{
                $pdf->Cell(60,6,"Terminado",1,0,'C',0);
            }    
            $pdf->Cell(60,6,$value->nombreplataforma,1,1,'C',0);
        }

        //footer PDF
        $pdf->SetY(-15);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
        $pdf->Output('D','Reporte videojuegos.pdf');
    }
}
?>