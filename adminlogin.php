<?php
session_start();
$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

$tbl_name="admin";

$conn = mysql_connect("$host","$username","$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$myusername=$_POST['uname'];

$mypassword=$_POST['psw'];

$myusername=stripslashes($myusername);

$mypassword=stripslashes($mypassword);

$myusername=mysql_real_escape_string($myusername);

$mypassword=mysql_real_escape_string($mypassword);

$sql="select * from $tbl_name where password='$mypassword'AND username='$myusername'";

$result=mysql_query($sql, $conn);

$count=mysql_num_rows($result);

if($count==1)
{
	echo"Login successful";
	$_SESSION["uname"] = $myusername;
	echo "<script>window.open('adminpage.html','_self')</script>";  
}
else
{
	echo "<script>alert('Login Unsuccessful.Please try again!');window.location.href='adminlogin.html';</script>";
}
mysql_close($conn);
?>
