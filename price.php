<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");
$temp = $_SESSION["uname"];

if(isset($_POST['submit']))//to run PHP script on submit
{

	$q1=$_POST['m1'];
	$q2=$_POST['m2'];
	$q3=$_POST['m3'];

	if(!empty($_POST['check_list']))// Loop to store and display values of individual checked checkbox.
	{
		foreach($_POST['check_list'] as $selected )
		{
			if($temp=="admin1")
			{
				if($selected=='11')
				{
					$sql = "UPDATE items SET price=$q1 WHERE iid=11";
					$res = mysql_query($sql);
				}
				elseif($selected=='12')
				{
					$sql = "UPDATE items SET price=$q2 WHERE iid=12";
					$res = mysql_query($sql);
				}
				elseif($selected=='13')
				{
					$sql = "UPDATE items SET price=$q3 WHERE iid=13";
					$res = mysql_query($sql);
				}
			}
			if($temp=="admin2")
			{
				if($selected=='21')
				{
					$sql = "UPDATE items SET price=$q1 WHERE iid=21";
					$res = mysql_query($sql);
				}
				elseif($selected=='22')
				{
					$sql = "UPDATE items SET price=$q2 WHERE iid=22";
					$res = mysql_query($sql);
				}
				elseif($selected=='23')
				{
					$sql = "UPDATE items SET price=$q3 WHERE iid=23";
					$res = mysql_query($sql);
				}
			}
			if($temp=="admin3")
			{
				if($selected=='31')
				{
					$sql = "UPDATE items SET price=$q1 WHERE iid=31";
					$res = mysql_query($sql);
				}
				elseif($selected=='32')
				{
					$sql = "UPDATE items SET price=$q2 WHERE iid=32";
					$res = mysql_query($sql);
				}
				elseif($selected=='33')
				{
					$sql = "UPDATE items SET price=$q3 WHERE iid=33";
					$res = mysql_query($sql);
				}
			}
		}
	}
echo "<script>alert('Price Successfully Changed!Press OK to continue..');window.location.href='adminpage.html';</script>";
}

?>
