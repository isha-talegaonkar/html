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


if(isset($_POST['submit']))//to run PHP script on submit
{
$q1=$_POST['rating'];

if (isset($_POST['rating'])) {

  // Show the radio button value, i.e. which one was checked when the form was sent
  echo $_POST['rating'];
	$sql2 = "INSERT INTO rating1(srno,rate)values(NULL,'$q1')";
				$res1=mysql_query($sql2);
}
}

$sql6=mysql_query('SELECT AVG(rate) AS final_sum FROM rating1');
$row=mysql_fetch_assoc($sql6);
$sum=$row['final_sum'];
$_SESSION['rate1']=$sum;
echo "<script>alert('Thank You for rating us!!');window.location.href='main.html';</script>"


?>
