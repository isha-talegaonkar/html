<?php

$conn = mysql_connect("localhost","root","password")or die("cannot connect");

mysql_select_db("pfc")or die("cannot select db");
// Check connection

$username = $_POST["name"];

$password = $_POST["password"];

$cpassword = $_POST["cpassword"];

$address = $_POST["address"];

$email = $_POST["email"];

$mob = $_POST["num"];

$pin = $_POST["pin"];

$sql = "INSERT INTO customer(cid,name,address,email,mob_no,password, pincode) VALUES (NULL,'$username','$address', '$email', '$mob', '$password', '$pin')";
	if(mysql_query($conn, $sql))
	{

		echo"Registration Successful";
		echo "<script>window.open('welcome.php','_self')</script>";  
	}
	else
	{
		echo"Error";
	}
}	
$conn->close();
?>

