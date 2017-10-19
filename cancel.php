<?php
session_start();
$conn = mysql_connect("localhost","root","password")or die("cannot connect");
mysql_select_db("pfc")or die("cannot select db");

$billno=$_POST['t'];
$cid = $_SESSION['cid'];

echo $billno;
echo $cid;
$sql="SELECT billno FROM hhbill1 WHERE billno=$billno AND cid=$cid";
$res = mysql_query($sql);
$count = mysql_num_rows($res);
if($count==1)
{
	$sql1="DELETE FROM hhbill1 where billno=$billno AND cid=$cid";
	$res = mysql_query($sql1);
	//$count = mysql_num_rows($res);
	if(mysql_query($sql))
	{
		echo"deleted order";
		echo "<script>alert('Order Deleted');window.location.href='restaurantlist.php';</script>";
	}
}
else
{
	echo"not found";	
}

?>
