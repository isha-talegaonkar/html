<?php
session_start();
$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

$tbl_name="customer";

$conn = mysql_connect("$host","$username","$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$myusername=$_POST['nm'];

$mypassword=$_POST['pswd'];

$myusername=stripslashes($myusername);

$mypassword=stripslashes($mypassword);

$myusername=mysql_real_escape_string($myusername);

$mypassword=mysql_real_escape_string($mypassword);

$sql="select * from $tbl_name where password='$mypassword'AND name='$myusername'";

$result=mysql_query($sql, $conn);

$count=mysql_num_rows($result);

if($count==1)
{
	echo"Login successful";
	$sql1 = "SELECT cid FROM customer where password='$mypassword'AND name='$myusername' limit 1";
	$res = mysql_query($sql1);
	$value = mysql_fetch_object($res);
	$_SESSION['cid'] = $value->cid;
	echo $value->cid;
	$sql2 = "INSERT INTO selects(date, cid, rid) values('2017-09-17 11:37:00', '$value->cid', NULL)";
	$res1=mysql_query($sql2);
}
else
{
	echo"Login unsuccessful";
}
mysql_close($conn);
?>
