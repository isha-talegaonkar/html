<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$sql1 = "SELECT price FROM items WHERE iid=41";
$result1 = mysql_query($sql1);
$value1 = mysql_fetch_object($result1);

$sql2 = "SELECT price FROM items WHERE iid=42";
$result2 = mysql_query($sql2);
$value2 = mysql_fetch_object($result2);

$sql3 = "SELECT price FROM items WHERE iid=43";
$result3 = mysql_query($sql3);
$value3 = mysql_fetch_object($result3);

echo"<!DOCTYPE html><html><head>";
echo "<link rel=stylesheet type=text/css href=r2menu.css></head>";
echo"<body background=restaurant4.jpg>";
echo"<div class=background>";
 echo"<h1><marquee behavior=slide><font size=5 color=#4d004d><font size=6>B</font>AKED AND<font size=6>W</font>IRED<font size=6>K</font>ALYANINAGAR<font size=6>P</font>UNE</marquee></font></h1><br>";
echo"<img src=r.png alt=The Pulpit Rock width=60 height=60 margin=1px;align=right>";
echo"<ul>";
	echo"<li class=dropdown>"; echo"</li>";
        echo"<li>MAP</li>";
        echo"<li><a href=t.html>MENU</a></li>";
        echo"<li class=dropdown>"; echo"</li>";
echo"</ul>";
echo"<div class=transbox>";
echo"<br/><br/>";
	echo"<form method=post action=place_order2.php>";
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
  		echo"<td><input type=checkbox name=check_list[] value=21 style=width: 30px; height: 30px; background-color: #ffd633;></td>";
		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=h4m1.jpg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>VEG CHEESE PIZZA</font><br> <br><font size=3>Traditional crispy crust smothered with our <br/>special herb flavoured sauce</font></td>";
    		echo"<td>$value1->price</td>";
    		echo"<td><input type=number name=r value=i2></td>";
 	echo"</tr>";
  	echo"<tr>";
  		echo"<td><input type=checkbox name=check_list[] value=22 id=a></td>";
    		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=h4m2.jpg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>CORN PIZZA</font><br><br><font size=3>Traditional crispy crust smothered with our <br/>special herb flavoured sauce with corn</font></td>";
    		echo"<td>$value2->price</td>";
    		echo"<td><input type=number name=s value=i3 id=a1></td>";
  	echo"</tr>";
  	echo"<tr>";
   		echo"<td><input type=checkbox name=check_list[] value=23></td>";
    		echo"<td><img src=veg.png alt=The Pulpit Rock width=40 height=40 margin=1px;align=center></td>";
		echo"<td><img src=h4m3.jpg alt=The Pulpit Rock width=200 height=150 align=left margin=1px;align=center></td>";
    		echo"<td><font size=5>GARLIC BREAD</font><br><br><font size=3>A crunch<y bread topped with garlic and olive oil or butter</font></td>";
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
