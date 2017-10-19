<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$admin = $_SESSION["uname"];
echo"<!DOCTYPE html><html><head>";
echo "<link rel=stylesheet type=text/css href=adminhist.css></head><body>";
echo"<ul>";
  echo"<li><a class=active href=main.html>Home</a></li>";
  echo"<li><a href=oneform.php>Signup</a></li>";
  echo"<li><a href=aboutuspage.html>About</a></li>";
  echo"<li><a href=restaurantlist.html>Restaurants</a></li>";
  echo"<li><a href=adminlogout.php>Admin Logout</a></li>";
echo"</ul>";

echo"<div class=background>";
  echo"<div class=transbox>";
    echo"<center><p class=title>PUNE FOOD CRAVINGS</p></center>";
  echo"</div>";
echo"</div>";
echo"<br/><br/>";
echo"<body><center><table border=5 padding=5 width=70%><tr><th>SR NO</th><th>BILL AMOUNT</th><th>DATE TIME</th><th>CUSTOMERID</th><th>BILL NO.</th>";
echo $admin;
if($admin=="admin1")
{
	$sql = "SELECT * from hhbill1";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result))
	{
		echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
	}	
}
if($admin=="admin2")
{
	$sql1 = "SELECT * from hbill2";
	$result1 = mysql_query($sql1);
	while($row1 = mysql_fetch_row($result1))
	{
		echo"<tr><td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td>";
	}	
}
if($admin=="admin3")
{
	$sql2 = "SELECT * from hbill3";
	$result2 = mysql_query($sql2);
	while($row2 = mysql_fetch_row($result2))
	{
		echo"<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td>";
	}	
}
echo"</table></center></body></html>";
?>
