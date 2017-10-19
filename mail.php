<?php

session_start();

$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

$tbl_name="customer";

$conn = mysql_connect("$host","$username","$password")or die("cannot connect");

$email=$_POST['nm'];

echo $email;

mysql_select_db("$db_name")or die("cannot select db");

$sql1 = "SELECT password FROM customer where  email='$email' limit 1";

$res=mysql_query($sql1);

$value = mysql_fetch_object($res);

echo $value->password;

// the message
$msg = "Password is \n $value->password";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($email,"My subject",$msg);*/

$to = "recipient@example.com";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
 
	if (mail($to, $subject, $body)) 
	{
   		echo("<p>Email successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Email delivery failed…</p>");
  	} 
?> 
