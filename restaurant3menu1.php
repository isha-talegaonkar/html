<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$sql1 = "SELECT price FROM items WHERE iid=31";
$result1 = mysql_query($sql1);
$value1 = mysql_fetch_object($result1);

$sql2 = "SELECT price FROM items WHERE iid=32";
$result2 = mysql_query($sql2);
$value2 = mysql_fetch_object($result2);

$sql3 = "SELECT price FROM items WHERE iid=33";
$result3 = mysql_query($sql3);
$value3 = mysql_fetch_object($result3);

echo"<!DOCTYPE html><html><head>";
echo "<link rel=stylesheet type=text/css href=r3menu.css></head>";
echo"<body background=restaurant3.jpg>";
echo"<div class=background>";
 echo"<h1><center><font size=6 color=white><font size=8>T</font>VUM, <font size=8>K</font>ALYANI <font size=8>N</font>AGAR</font></center></h1><br>";
echo"<div align=center>";
echo"<ul>";
        echo"<li><a href=main.html>MAIN</a></li>";
        echo"<li><a href=tmap.html>MAP</a></li>";
        echo"<li><a href=restaurant3menu1.php>MENU</a></li>";
        echo"<li><a href=logout.php>LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
echo"<div class=transbox>";
echo"<br/><br/>";
	echo"<form method=post action=place_order3.php>";
        echo"<br/><br/>";
        echo"<table id=t01 background=menu1chef.jpg height:800px,width:1000px>";
 	echo"<tr>";
  		echo"<th>ADD</th>";
		echo"<th>VEG/<br>NON-VEG</th>";
     		echo"<th>ITEM</th>";
    		echo"<th>ITEM NAME</th>"; 
    		echo"<th>PRICE</th>";
    		echo"<th>QUANTITY</th>";
  	echo"</tr>";
  	echo"<tr>";
  		echo"<td><input type=checkbox name=check_list[] value=31 style=width: 30px; height: 30px; background-color: #d9d9d9;></td>";
		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=31.jpg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>PAPAD PLATTER</font><br> <br><font size=3> A variety of papads served with different chatnis and 			spices</font></td>";
    		echo"<td>$value1->price</td>";
    		echo"<td><input type=number name=r value=i2></td>";
 	echo"</tr>";
  	echo"<tr>";
  		echo"<td><input type=checkbox name=check_list[] value=32 id=a></td>";
    		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=32.jpg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>PANEER BUTTER MASALA</font><br><br><font size=3>Soft cottage cheese cubes in sweetish red gravy<br> 			</font></td>";
    		echo"<td>$value2->price</td>";
    		echo"<td><input type=number name=s value=i3 id=a1></td>";
  	echo"</tr>";
  	echo"<tr>";
   		echo"<td><input type=checkbox name=check_list[] value=33></td>";
    		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=33.jpeg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>PAV BHAJI</font><br><br><font size=3>An exotic blend of vegetables cooked in Indian spices,<br>served 			with hot bread</font></td>";
   	 	echo"<td>$value3->price</td>";
    		echo"<td><input type=number name=t value=i4></td>";
 	echo"</tr>";
	echo"</table><br/><br/><br/>";
	echo"<div align=center>";
	echo"<font color=white><input type=submit style=width: 135px; height: 60px;  padding: 0.2px; background-color: #4d004d;color:white 		value=PLACE ORDER name=submit></font>";
	echo"</div>";
echo"</form>";
echo"</body>";
echo"</html>";
?>
