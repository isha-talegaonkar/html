<?php


$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

$conn = mysql_connect("$host","$username","$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");
$search = $_POST["search"];




$sql =  "select *from restaurant where rname='$search'";
$res=mysql_query($sql,$conn);

$count=mysql_num_rows($res);
if($count==1)
{
	$sql4 = "SELECT rid FROM restaurant WHERE rname='$search'";
	$res4 = mysql_query($sql4);
	$value4 = mysql_fetch_object($res4);

	
	if($value4->rid=='1')
	{
		echo "<script>window.open('restaurant1.html','_self')</script>"; 
	}
	elseif($value4->rid=='2')
	{
		echo "<script>window.open('restaurant2.html','_self')</script>"; 
	}
	elseif($value4->rid=='3')
	{
		echo "<script>window.open('restaurant3.html','_self')</script>"; 
	}
	
}
else
{
	
$sql =  "select *from items where iname='$search'";
$res=mysql_query($sql,$conn);
$count=mysql_num_rows($res);
	if($count==1)
	{

		$sql4 = "SELECT iid FROM items WHERE iname='$search'";
		$res4 = mysql_query($sql4);
		$value4 = mysql_fetch_object($res4);

	
		if($value4->iid=='11'||$value4->iid=='12'||$value4->iid=='13')
		{
			echo "<script>window.open('restaurant1.html','_self')</script>"; 
		}
		elseif($value4->iid=='21'||$value4->iid=='22'||$value4->iid=='23')
		{
			echo "<script>window.open('restaurant2.html','_self')</script>"; 
		}
		elseif($value4->iid=='31'||$value4->iid=='32'||$value4->iid=='33')
		{
			echo "<script>window.open('restaurant3.html','_self')</script>"; 
		}
	}
	else
	{
		//echo'<script language="javascript">';
		//echo'alert("Sorry!Cannot find this right now :(");';
		//echo'</script>';
		echo "<script>window.open('restaurantlist.html','_self')</script>";  
	}
}
$conn->close();
?>

