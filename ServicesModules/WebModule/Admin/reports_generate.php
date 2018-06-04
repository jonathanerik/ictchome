<?php
	include  '../db_connect.php';
	include '../fpdf181/fpdf.php';
	session_start();
	$status = $_POST["report_status"];
	if($status == 0)
	{
		$request_query = "SELECT * FROM request";
	}
	else if($status == 1)
	{
		$request_query = "SELECT * FROM request WHERE approved_ictc = 1 AND approved_superior = 1";
	}
	else if($status == 2)
	{
		$request_query = "SELECT * FROM request WHERE approved_ictc = 0 AND approved_superior = 1";
	}
	else if($status == 3)
	{
		$request_query = "SELECT * FROM request WHERE approved_ictc = 1 AND approved_superior = 0";
	}
	else if($status == 4)
	{
		$request_query = "SELECT * FROM request WHERE approved_ictc = 0 AND approved_superior = 0";
	}
	
	
	$request_result = mysqli_query($conn, $request_query);
	$requests = mysqli_fetch_all($request_result,MYSQLI_ASSOC);


	
	class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}



// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(30, 25,15, 40, 25, 55);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = true;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row['name'],'LR',0,'C',$fill);
        $this->Cell($w[1],6,$row['stud_no'],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$row['department'],'LR',0,'C',$fill);
        $this->Cell($w[3],6,$row['request_message'],'LR',0,'C',$fill);
        $this->Cell($w[4],6,$row['request_date'],'LR',0,'C',$fill);
        if($row['approved_ictc']&& $row['approved_superior'])
        {
        	$this->Cell($w[5],6,'Approved','LR',0,'C',$fill);
        }
        else if(!$row['approved_ictc']&& $row['approved_superior'])
        {
        	$this->Cell($w[5],6,'For approval of ICTC','LR',0,'C',$fill);
        }
        else if($row['approved_ictc']&& !$row['approved_superior'])
        {
        	$this->Cell($w[5],6,'For approval of Superior','LR',0,'C',$fill);
        }
        else if(!$row['approved_ictc']&& !$row['approved_superior'])
        {
        	$this->Cell($w[5],6,'For approval of ICTC and Superior','LR',0,'C',$fill);
        }
        
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('Name', 'Employee No.','College', 'Request', 'Request Date', 'Status');
// Data loading
$data = $requests;
$pdf->SetFont('Arial','',10);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>