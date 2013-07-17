<?php
require('fpdf.php');
$pdf = new FPDF('P','mm',array(100,150));
$pdf->AddPage();
$pdf->SetFont('Times','',12);
	$pdf->Text(90,24,'(AUTONOMUS)');
$pdf->Text(56,35,'www.rgitnandyal.com ph: 08514-275203, Fax - 275123');
?>