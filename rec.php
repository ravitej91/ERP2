<?php
session_start();
include "connect/connects.php";
if(!isset($_SESSION['user_id']))
{
	
	die("Login First to use this page <br/> <a href=index.php> LOGIN</a>");
}
?>
<?php
	if(!isset($_SESSION['rc_id']))
	{
		die("You no longer hav access to this page");
	}
	else
	{
		$rc_id = $_SESSION['rc_id'];
		//
		$fetch = mysql_query("SELECT * from receipt WHERE `rc_id` = '$rc_id'");
		$det = mysql_fetch_assoc($fetch);
		$paid = array($det['jntu'],$det['bus'],$det['placement'],$det['tutionfee']);
		if($det['accyr']==="fy")$studtab = "stud1";
								else if($det['accyr']==="sy")$studtab = "stud2";
								else if($det['accyr']==="ty")$studtab = "stud3";
								else $studtab = "stud4";

		$resu_fetch = mysql_query("SELECT * from $studtab where `stu_roll` = '$det[stu_roll]'");
		$resu = mysql_fetch_assoc($resu_fetch);
		require('fpdf.php');
		class PDF extends FPDF
		{
			function BasicTable($header, $data)
			{
			// Header
			foreach($header as $col)
			{
				$this->Cell(65,7,$col,1);
			}
			$this->Ln();
			// Data
			/*for($i=0; $i<=3;$i++)
			{
				foreach($i=0; $i<=3;$i++)
				$this->Cell(40,6,$col,1);
				$this->Ln();
			}*/
		}
		// Page header
		function Header()
		{
			// Logo
			$this->Image('img/logo.png',9,10,30);
			// Arial bold 15
			$this->SetFont('Arial','B',15);
			// Move to the right
			$this->Cell(80);
			// Title
			$this->Cell(30,10,'Rajeev Gandhi Memorial College Of Engineering & Tech.',0,0,'C');
			// Line break
			$this->Ln(20);
		}
		// Page footer
		function Footer()
		{
			// Position at 1.5 cm from bottom
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Page number
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	// Instanciation of inherited class
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	$pdf->Text(90,24,'(AUTONOMUS)');
	$pdf->Ln(20);
	$pdf->Text(55,29,'Acccredited by NAAC of UGC, New Delhi with A Grade');
	//$pdf->Ln(20);
	//$pdf->Text(50,37,'Approved by AICTE, New Delhi - Accredited by NBA, New Delhi.');
	$pdf->Text(56,35,'www.rgitnandyal.com ph: 08514-275203, Fax - 275123');
	$pdf->Line(8,39,200,39);
	$pdf->Line(8,40,200,40);
	//$pdf->SetLineWidth(0.5);
	$pdf->SetFillColor(192);
	//$pdf->RoundedRect(91, 44, 28, 9, 3.5, 'DF');
	$pdf->Rect(91,44,28,9,'DF');
	//$pdf->SetTextColor(255,255,255);
	$pdf->SetFont('Arial','B',16);
	$pdf->Text(93,50,'RECEIPT');
	$pdf->SetFont('Arial','',12);
	$curr = $det['stu_roll'];
	$check  = mysql_query("SELECT * FROM stdet WHERE stu_roll='$curr'");
	$res = mysql_fetch_assoc($check);
	$pdf->Text(10,60,'Account ID ');
	$pdf->Text(10,68,'Name ');
	$pdf->Text(10,76,'Roll Number ');
	$pdf->Text(10,84,'S.o/D.o ');
	$pdf->Text(10,92,'Branch ');
	for($i=0;$i<=4;$i++)
	{
		$pdf->SetFont('Arial','B',12);
		$pdf->Text(38,60+($i*8),':');
	}
	$pdf->SetFont('Arial','B',15);
	$pdf->Text(41 ,60, $det['accid']);
	$pdf->SetFont('Arial','B',13);
	$pdf->Text(41 ,68, $res['stu_name']);
	$pdf->Text(41 ,76, $res['stu_roll']);
	$pdf->Text(41 ,84, $res['stu_father']);
	$pdf->Text(41 ,92, $res['stu_branch']);
	$pdf->Text(155,50,'Date: ');
	$pdf->Text(170 ,50, $det['date']);
	$pdf->Text(10,50,'RC: ');
	$pdf->Text(20 ,50, $det['rc_id']);
	$pdf->SetFont('Arial','',12);
	$pdf->Line(8,95,200,95);
	//$pdf->Line(8,101,200,101);
	$pdf->Text(10 ,102, 'Receipt for the Academic Year: ');
	$pdf->Text(10 ,110, 'Paid With: ');
	if($det['payopt']=='CASH')
		$pdf->Text(34 ,110, 'CASH ');
	else
	{
		$dd= "DD No. :".$det['payopt'];
	$pdf->Text(34 ,110, $dd);
}
	$pdf->SetFont('Arial','B',15);
	if($det['accyr']=='fy')
		$pdf->Text(70 ,102, 'B.Tech , First Year ');
	else if($det['accyr']=='sy')
		$pdf->Text(70 ,102, 'B.Tech , Second Year ');
	else if($det['accyr']=='ty')
		$pdf->Text(70 ,102, 'B.Tech , Third Year ');
	else
		$pdf->Text(70 ,102, 'B.Tech , Final Year ');
	
		
	$header = array('S.no','Particulars','Amount');
	$pdf->SetX(10);
	$pdf->SetY(114);
	$pdf->BasicTable($header,$res);
	$part = array('JNTU FeeS','Bus Fees','Placement Fees','Tution Fees');
	for($i=1;$i<=4;$i++)
	{
		$pdf->SetX(12);
		$pdf->SetY(114+($i*7));
		$pdf->Cell(65,7,($i),1);
		$pdf->Cell(65,7,$part[$i-1],1);
		$pdf->Cell(65,7,$paid[$i-1],1);
	}
	$pdf->SetX(12);
	$pdf->SetY(149);
	$pdf->Cell(65,7,'',1);
	$pdf->Cell(65,7,'TOTAL',1);
	$pdf->Cell(65,7,$det['total'],1);
	$pdf->SetFont('Arial','B',13);
	//$pdf->Text(10,155,'Details Of Payment:');
	//$pdf->Line(10,156,52,139);
	$pdf->Text(10,162,'1) Jntu Fees:');
	$pdf->Text(17,168,'Date: ');
	$pdf->Text(17,174,'Amount: ');
	$tmp = $resu['jdate'];
	if($tmp == 0)
	{
		$pdf->Text(34,168,'Not Paid');
		$pdf->Text(38,174,'Not Paid');
	}
	else
	{
		$pdf->Text(34,168,$tmp);
		$pdf->Text(38,174,$resu['jntu']);
	}
	$pdf->Text(10,180,'2) Bus Fees:');
	$pdf->Text(17,186,'Date: ');
	$pdf->Text(17,192,'Amount: ');
	$tmp = $resu['bdate'];
	if($tmp == 0)
	{
		$pdf->Text(34,186,'Not Paid');
		$pdf->Text(38,192,'Not Paid');
	}
	else
	{
		$pdf->Text(34,186,$tmp);
		$pdf->Text(38,192,$resu['bus']);
	}
	$pdf->Text(10,198,'3) Placement Fees:');
	$pdf->Text(17,204,'Date: ');
	$pdf->Text(17,210,'Amount: ');
	$tmp = $resu['pdate'];
	if($tmp == 0)
	{
		$pdf->Text(34,204,'Not Paid');
		$pdf->Text(38,210,'Not Paid');
	}
	else
	{
		$pdf->Text(34,204,$tmp);
		$pdf->Text(38,210,$resu['placement']);
	}
	$pdf->Text(10,216,'4) Tution Fees:');
	$pdf->Text(17,222,'Date: ');
	$pdf->Text(17,228,'Amount: ');
	$tmp = $resu['tdate'];
	if($tmp == 0)
	{
		$pdf->Text(34,222,'Not Paid');
		$pdf->Text(38,228,'Not Paid');
	}
	else
	{
		$pdf->Text(34,222,$tmp);
		$pdf->Text(38,228,$resu['tutionfee']);
	}
	$pdf->SetFont('Arial','',12);
	$pdf->Text(182,280,'Signature');  
	$pdf->Output($det['path'],'F');  
	$pdf->Output();


}

?>


