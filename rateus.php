<!DOCTYPE html>
<html>
<head>
<style>
div.background {
  margin-top:30px;
  background: url(main.jpg) repeat;
  width:auto;
  height:100;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
}

div.transbox p.title {
  margin: 5%;
  font-weight: bold;
  color: #ffffff;
  float:center;
}

p.title
{
  border-style:solid;
  color:#ffffff;
  font-family:Courier New;
  font-size:80px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #00b300;
}

.floating-box {
    display: inline-block;
    width: 380px;
    height: 320px;
    margin: 10px;
    border: 3px solid white;  
	
   background-color:#e6e6e6;
}


.floating-box1 {
    display: inline-block;
    width: 380px;
    height: 320px;
    margin: 10px;
    border: 3px solid white;  
	
	   background-color:#e6e6e6;
}


div.transbox1 {
  
	height:25px;
	width:40px;
float:right;

background-color:green;
}

div.transbox1 p.title1 {
  margin: 5%;
	font-size:2;
  font-weight: bold;
  color: white;
 
}


.footer 
{
   left: 0;
   bottom: 0;
   width: 100%;
   height:100px;
   background-color: #333;
   color: white;
   text-align: center;
   
}

.caption {
    display: block;
}


.box
{
	width:20px;
	height:10px;

}



table {
    width:100%;
	height:400px;
	
}
table, th, td {
    border: 1px white;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
	
}
table#t01 tr:nth-child(odd) {
   
}
table#t01 th {
    background-color: green;
    color: white;
}


</style>
</head>
<body>
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
$temp1 = $_SESSION['rate1'];
$temp2 = $_SESSION['rate2'];
$temp3 = $_SESSION['rate3'];

$sql6=mysql_query('SELECT AVG(rate) AS final_sum FROM rating1');
$row=mysql_fetch_assoc($sql6);
$sum1=$row['final_sum'];

$sql7=mysql_query('SELECT AVG(rate) AS final_sum FROM rating2');
$row2=mysql_fetch_assoc($sql7);
$sum2=$row2['final_sum'];


$sql8=mysql_query('SELECT AVG(rate) AS final_sum FROM rating3');
$row3=mysql_fetch_assoc($sql8);
$sum3=$row3['final_sum'];
?>


<ul>
  <li><a class="active" href="main.html">Home</a></li>
  <li><a href="oneform.php">Signup</a></li>
  <li><a href="aboutuspage.html">About</a></li>
  <li><a href="restaurantlist.php">Restaurants</a></li>
</ul>

<div class="background">
  <div class="transbox">
    <center><p class="title">PUNE FOOD CRAVINGS</p></center>
  </div>
</div>

<br><br><br>
<h1 style= "margin:10px;"><font color="green" > Rate us</font></h1>
<table id="t01" background="menu1chef.jpg height:800px,width:1000px">
  <tr>
  	 <th>Restaurant</th>
	<th>Rating</th>
	<th>Submit Rating</th> 
  </tr>
  <tr>
	<form method="post" action="rate1.php">
	<td><div class="floating-box">
<a href="restaurant1.html"><img class="img1" src="restaurant1.jpg" alt="Pineapple" width="380" height="220" ></a>
<div class="transbox1">
     <span style="cursor:pointer"><a title="Excellent"><center><p class="title1"><?php echo $sum1;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>W</font>OOD <font size="5" >F</font>IRE <font size="5" >G</font>RILL,<font size="5" >K</font>OTHRUD</b><p>Chinese,Italian and Indian.</p></font></div></td>
	<td>  <input type="radio" name="rating" value="1"> 1<input type="radio" name="rating" value="2"> 2<input type="radio" name="rating" value="3"> 3<input type="radio" name="rating" value="4"> 4<input type="radio" name="rating" value="5"> 5</td>
  	<td><font color="white"><input type="submit" style="width: 135px; height: 60px;  padding: 0.2px; background-color: green;color:white" value="Submit rating" name="submit"></font></td>
</form>
  </tr>
  <tr>
	<form method="post" action="rate2.php">
 		<td><div class="floating-box1">

<a href="restaurant2.html"><img class="img2" src="restaurant2.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Very good"><center><p class="title1"><?php echo $sum2;?></p></center></a></span>
  </div>
<font size="4" ><font size="5"><b>M</font>ULTISPICE,<font size="5">K</font>ARVE <font size="5">N</font>AGAR </b><p>North Indian, Chinese, Continental.</p></font></div></font></div></td>
  	
  	<td>  <input type="radio" name="rating" value="1"> 1<input type="radio" name="rating" value="2"> 2<input type="radio" name="rating" value="3"> 3<input type="radio" name="rating" value="4"> 4<input type="radio" name="rating" value="5"> 5</td>
	<td><font color="white"><input type="submit" style="width: 135px; height: 60px;  padding: 0.2px; background-color: green;color:white" value="Submit rating" name="submit"></font></td>
</form>	
  </tr>

	<tr>

<form method="post" action="rate3.php">
 		<td>
<div class="floating-box">
<a href="restaurant3.html"><img class="img1" src="restaurant3.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Good"><center><p class="title1"><?php echo $sum3;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>T</font>VUM, <font size="5">K</font>ALYANI <font size="5">N</font>AGAR</b><p>North Indian, South Indian, Rajasthani.</p></div></td>
  	<td>  <input type="radio" name="rating" value="1"> 1<input type="radio" name="rating" value="2"> 2<input type="radio" name="rating" value="3"> 3<input type="radio" name="rating" value="4"> 4<input type="radio" name="rating" value="5"> 5</td>
	<td><font color="white"><input type="submit" style="width: 135px; height: 60px;  padding: 0.2px; background-color: green;color:white" value="Submit rating" name="submit"></font></td>
	</form>
	</tr>
</table><br/><br/><br/>
<div class="footer">
  <p>GOOD FOOD,GOOD MOOD!</p>
</div>
</body>
</html>
