<?php
require "fpdf.php";
$db = new PDO ('mysql:host=localhost;dbname=itapdev','root','');

class myPDF extends FPDF{
    function header(){
        $this->Image('z.png',140,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,60,'ICTC Network Support Report',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,-45,'ICTC NeSSys: Network Service System',0,0,'C');
        $this->Ln(-10);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');  
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(15,10,'#',1,0,'C');
        $this->Cell(20,10,'Division',1,0,'C');
        $this->Cell(20,10,'Requestor',1,0,'C');
        $this->Cell(30,10,'Date Requested',1,0,'C');
        $this->Cell(20,10,'Contact',1,0,'C');
        $this->Cell(50,10,'Comment',1,0,'C');
        $this->Cell(30,10,'Requested By',1,0,'C');
        $this->Cell(20,10,'Status',1,0,'C');
        $this->Cell(50,10,'Note',1,0,'C');
        $this->Cell(25,10,'Technician',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',11);
        $stmt = $db->query('select * from requestdatabase');
        while($data = $stmt ->fetch(PDO::FETCH_OBJ)){
            $this->Cell(15,10,$data->id,1,0,'C');
            $this->Cell(20,10,$data->division,1,0,'L');
            $this->Cell(20,10,$data->contact,1,0,'L');
            $this->Cell(30,10,$data->date,1,0,'L');
            $this->Cell(20,10,$data->comment,1,0,'L');
            $this->Cell(50,10,$data->requestedby,1,0,'L');
            $this->Cell(30,10,$data->username,1,0,'L');
            $this->Cell(20,10,$data->status,1,0,'L');
            $this->Cell(50,10,$data->note,1,0,'L');
            $this->Cell(25,10,$data->technician,1,0,'L');
            $this->Ln();
        }
    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();