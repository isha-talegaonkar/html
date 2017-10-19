<!DOCTYPE html>
<html>
<head>
<style>
p.one{
	font-family: 'Berkshire Swash', cursive;
	color: #660000;
	font-family: 'Berkshire Swash', cursive;
	font-size:40px
}
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
    height: 300px;
    margin: 10px;
    border: 3px solid white;  
	
   background-color:#e6e6e6;
}


.floating-box1 {
    display: inline-block;
    width: 380px;
    height: 300px;
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
@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash');
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
  <li><a href="adminlogin.html">Admin Login</a></li>
</ul>

<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<div class="background">
  <div class="transbox">
    <center><p class="title">PUNE FOOD CRAVINGS</p></center>
  </div>
</div>

    <style="margin:10px;"><font size="6" color="green"><b>Indian Food</b></font></style><br><br>
<font size="4" color="gray"><b>Amazing blend of desi spices to water your mouth!!</b></font><br>

<div class="floating-box">
<a href="restaurant1.html"><img class="img1" src="restaurant1.jpg" alt="Pineapple" width="380" height="220" ></a>
<div class="transbox1">
     <span style="cursor:pointer"><a title="Excellent"><center><p class="title1"><?php echo $sum1;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>W</font>OOD <font size="5" >F</font>IRE <font size="5" >G</font>RILL,<font size="5" >K</font>OTHRUD</b><p>Chinese,Italian and Indian.</p></font></div>

<div class="floating-box1">

<a href="restaurant2.html"><img class="img2" src="restaurant2.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Very good"><center><p class="title1"><?php echo $sum2;?></p></center></a></span>
  </div>
<font size="4" ><font size="5"><b>M</font>ULTISPICE,<font size="5">K</font>ARVE <font size="5">N</font>AGAR </b><p>North Indian, Chinese, Continental.</p></font></div></font></div>

<div class="floating-box">
<a href="restaurant3.html"><img class="img1" src="restaurant3.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Good"><center><p class="title1"><?php echo $sum3;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>T</font>VUM, <font size="5">K</font>ALYANI <font size="5">N</font>AGAR</b><p>North Indian, South Indian, Rajasthani.</p></div>
</center>
</div>
<style="margin:10px;"><font size="6" color="green"><b> Italian</b></font></style><br><br>
<font size="4" color="gray"><b>Keep calm and eat Italian!!</b></font><br>


<div class="floating-box1">

<a href="restaurant2.html"><img class="img2" src="restaurant2.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Very good"><center><p class="title1"><?php echo $sum2;?></p></center></a></span>
  </div>
<font size="4" ><font size="5"><b>M</font>ULTISPICE,<font size="5">K</font>ARVE <font size="5">N</font>AGAR </b><p>North Indian, Chinese, Continental.</p></font></div></font></div><br>




<style="margin:10px;"><font size="6" color="green"><b>Sweet Tooth</b></font></style><br><br>
<font size="4" color="gray"><b>Life is short...Eat dessert first!!</b></font><br>



<div class="floating-box">
<a href="restaurant3.html"><img class="img1" src="restaurant3.jpg" alt="Pineapple" width="380" height="220"></a>
<div class="transbox1">
    <span style="cursor:pointer"><a title="Good"><center><p class="title1"><?php echo $sum3;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>T</font>VUM, <font size="5">K</font>ALYANI <font size="5">N</font>AGAR</b><p>North Indian, South Indian, Rajasthani.</p></div>
</center>


<div class="footer">
  <p>GOOD FOOD,GOOD MOOD!</p>
</div>
</body>
</html>
