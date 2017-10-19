<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

echo"<!DOCTYPE html><html><head>";
echo "<link rel=stylesheet type=text/css href=chprice.css></head><body>";


echo"<ul>
  <li><a class=active href=main.html>Home</a></li>
  <li><a href=oneform.php>Signup</a></li>
  <li><a href=aboutuspage.html>About</a></li>
  <li><a href=restaurantlist.html>Restaurants</a></li>
  <li><a href=adminlogout.php>Admin Logout</a></li>
</ul>";

        echo"<br/><br/>";
        echo"<table id=t01 height:800px,width:1000px>";
 	echo"<tr>";
	echo"<th>ITEM NAME</th>"; 
    	echo"<th>ITEM NAME</th>"; 
    	echo"<th>PRICE</th>";
	echo"<th>CHANGED PRICE</th>";
  	echo"</tr>";

	$temp = $_SESSION["uname"];

	if($temp=="admin1")
	{
		$sql1 = "SELECT price FROM items WHERE iid=11";
		$result1 = mysql_query($sql1);
		$value1 = mysql_fetch_object($result1);

		$sql2 = "SELECT price FROM items WHERE iid=12";
		$result2 = mysql_query($sql2);
		$value2 = mysql_fetch_object($result2);

		$sql3 = "SELECT price FROM items WHERE iid=13";
		$result3 = mysql_query($sql3);
		$value3 = mysql_fetch_object($result3);

		echo"<form method=post action=price.php>";
	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=11 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>VEG MANCHURIAN</font>";
	    		echo"<td>$value1->price</td>";
			echo"<td><input type=number name=m1 placeholder=Enter price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=12 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>PANEER CHILLI DRY</font>";
	    		echo"<td>$value2->price</td>";
			echo"<td><input type=number name=m2 placeholder=Enter price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=13 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>HARA BHARA KABAB</font>";
	    		echo"<td>$value3->price</td>";
			echo"<td><input type=number name=m3 placeholder=Enter price></td>";
	 	echo"</tr>";
		echo"</table>";
		echo"<center><input type=submit name=submit value=submit></center>";
		echo"</form>";
	}
	else if($temp=="admin2")
	{
		$sql1 = "SELECT price FROM items WHERE iid=21";
		$result1 = mysql_query($sql1);
		$value1 = mysql_fetch_object($result1);

		$sql2 = "SELECT price FROM items WHERE iid=22";
		$result2 = mysql_query($sql2);
		$value2 = mysql_fetch_object($result2);

		$sql3 = "SELECT price FROM items WHERE iid=23";
		$result3 = mysql_query($sql3);
		$value3 = mysql_fetch_object($result3);

		echo"<form method=post action=price.php>";
	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=21 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>VEG MONCHOW SOUP</font>";
	    		echo"<td>$value1->price</td>";
			echo"<td><input type=number name=m1 placeholder=Enter changed price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=22 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>CHHOLE BATURE</font>";
	    		echo"<td>$value2->price</td>";
			echo"<td><input type=number name=m2 placeholder=Enter changed price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
echo"<td><input type=checkbox name=check_list[] value=23 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>ALFREDO PASTA</font>";
	    		echo"<td>$value3->price</td>";
			echo"<td><input type=number name=m3 placeholder=Enter changed price></td>";
	 	echo"</tr>";
		echo"</table>";
		echo"<center><input type=submit name=submit value=submit></center>";
		echo"</form>";
	}
	else if($temp=="admin3")
	{
		$sql1 = "SELECT price FROM items WHERE iid=31";
		$result1 = mysql_query($sql1);
		$value1 = mysql_fetch_object($result1);

		$sql2 = "SELECT price FROM items WHERE iid=32";
		$result2 = mysql_query($sql2);
		$value2 = mysql_fetch_object($result2);

		$sql3 = "SELECT price FROM items WHERE iid=33";
		$result3 = mysql_query($sql3);
		$value3 = mysql_fetch_object($result3);

		echo"<form method=post action=price.php>";
	  	echo"<tr>";
	echo"<td><input type=checkbox name=check_list[] value=31 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>PAPAD PLATTER</font>";
	    		echo"<td>$value1->price</td>";
			echo"<td><input type=number name=m1 placeholder=Enter changed price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
	echo"<td><input type=checkbox name=check_list[] value=32 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>PANEER BUTTER MASALA</font>";
	    		echo"<td>$value2->price</td>";
			echo"<td><input type=number name=m2 placeholder=Enter changed price></td>";
	 	echo"</tr>";

	  	echo"<tr>";
	echo"<td><input type=checkbox name=check_list[] value=33 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
	    		echo"<td><font size=3>PAV BHAJI</font>";
	    		echo"<td>$value3->price</td>";
			echo"<td><input type=number name=m3 placeholder=Enter changed price></td>";

	 	echo"</tr>";
		echo"</table>";
		echo"<font size=3><center><input type=submit name=submit value=SUBMIT></center></font>";
		echo"</form>";
	}
echo"</body></html>";

?>
