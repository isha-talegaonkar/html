<?php
session_start();
$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

$tbl_name="customer";

$count=0;

$conn = mysql_connect("$host","$username","$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$pincode=$_POST['pin'];
$number=$_POST['num'];

echo $pincode;
if(Is_Numeric($pincode) && $pincode > 400000 && $pincode < 500000)
{
	//echo "correct";
	$count++;

	if($pincode > 999999999 && $pincode < 1000000001 )
	{
		echo "";
		$count++;	

	}
	else
	{
		echo "<script>alert('ph no incorrect');</script>";
		//$count=0;
	}	
}
else
{
	echo "<script>alert('pincode incorrect');</script>";
	//$count=0;
}
?>
