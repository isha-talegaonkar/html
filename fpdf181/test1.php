<?php

session_start();

$db_name="pfc";
$count=0;
$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$temp = $_SESSION['cid'];
$fsum = $_SESSION['fsum'];

			$sql = "SELECT billno FROM back_b WHERE cid='$temp'";
			$res = mysql_query($sql);
			$value = mysql_fetch_object($res);

			$sql1 = "SELECT name FROM customer WHERE cid='$temp'";
			$res1 = mysql_query($sql1);
			$value1 = mysql_fetch_object($res1);

			$sql2 = "SELECT * from back_o";
			$res2 = mysql_query($sql2);
	

			$sql4 = "SELECT rid from back_b WHERE billno='$value->billno'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);

			$sql3 = "SELECT rname FROM restaurant WHERE rid='$value4->rid'";
			$res3 = mysql_query($sql3);
			$value3 = mysql_fetch_object($res3);

			$sql5="SELECT bdate FROM back_b WHERE billno='$value->billno'";
			$res5 = mysql_query($sql5);
			$value5 = mysql_fetch_object($res5);	

			$sql6="SELECT billamt FROM back_b WHERE billno='$value->billno'";
			$res6 = mysql_query($sql6);
			$value6 = mysql_fetch_object($res6);		


require('./fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,$value5->bdate, 0, 0, 'R');
$pdf->Ln(10);
$pdf->Cell(0,20,'PUNE FOOD CRAVINGS', 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(0,20,'INVOICE', 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(0,20,$value3->rname, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(40,40,'CID: ');
$pdf->Cell(40,40,$temp);
$pdf->Cell(45,40,'Customer Name: ');
$pdf->Cell(40,40,$value1->name);
$pdf->Ln(10);
$pdf->Cell(40,40,'Bill number: ');
$pdf->Cell(40,40,$value->billno);
$pdf->Ln(40);

$pdf->Cell(60,20,'ITEM',0,0,'C');
$pdf->Cell(40,20,'PRICE');
$pdf->Cell(40,20,'QUANT');
$pdf->Cell(40,20,'TOTAL');	
$pdf->Ln(10);
	while($row = mysql_fetch_row($res2))
	{
		$sql7="SELECT iname FROM items WHERE iid='$row[1]'";
		$res7 = mysql_query($sql7);
		$value7 = mysql_fetch_object($res7);	
		$pdf->Cell(60,20,$value7->iname,0,0,'C');
		$pdf->Cell(40,20,$row[2]);
		$pdf->Cell(40,20,$row[3]);
		$pdf->Cell(40,20,$row[4]);
		$count=$count+$row[4];
		$pdf->Ln(10);		
	}
$pdf->Ln(10);
$pdf->Cell(40,40,'Total Amount:');
$pdf->Cell(40,40,$count);
$pdf->Ln(10);
$pdf->Cell(40,40,'10% Discount:');
$pdf->Cell(70,40,$fsum);

$pdf->Ln(20);
$pdf->Cell(0,40,'THANKYOU',0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,40,'VISIT AGAIN!',0,0,'C');

$sql8 = "DELETE FROM back_o";
$res8 = mysql_query($sql8);

$sql9 = "DELETE FROM back_b"; 
$res9 = mysql_query($sql9);

$pdf->Output();
?>
