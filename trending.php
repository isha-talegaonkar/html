<!DOCTYPE html>
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
    width: 350px;
    height: 200px;
    margin: 10px;
    border: 3px solid #ccc;  
}

input[type=text] {
    width: 770px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
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







}
.caption {
    display: block;
}





.floating-box1 {
    display: inline-block;
    width: 400px;
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



div.tr{
margin:10px;
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

?>
<ul>
  <li><a class="active" href="#Home">Home</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="signup.html">Signup</a></li>
  <li><a href="aboutuspage.html">About</a></li>
  <li><a href="restaurantlist.php">Restaurants</a></li>
</ul>

<div class="background">
  <div class="transbox">
    <center><p class="title">PUNE FOOD CRAVINGS</center>
  </div>
</div>
<br/><br/>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<br>
<div class="tr">
<style="margin:10px;"><font size="4" color="green"><b> Trending this week</b></font></style><br>
<font size="3" color="gray"><b>The most popular restaurants in town this week!</b></font>
</div>
<br>
<div class="floating-box1">
<img class="img1" src="restaurant1.jpg" alt="Pineapple" width="400" height="220" >
<div class="transbox1">
     <span style="cursor:pointer"><a title="Excellent"><center><p class="title1"><?php echo $sum1;?></p></center></a></span>
  </div>
<font size="4"><font size="5"><b>W</font>OOD <font size="5" >F</font>IRE <font size="5" >G</font>RILL,<font size="5" >K</font>OTHRUD</b><p>Chinese,Italian and Indian.</p></font></div>



<div class="floating-box1">

<img class="img2" src="restaurant2.jpg" alt="Pineapple" width="400" height="220">
<div class="transbox1">
    <span style="cursor:pointer"><a title="Very good"><center><p class="title1"><?php echo $temp2;?></p></center></a></span>
  </div>
<font size="4" ><font size="5"><b>M</font>ULTISPICE,<font size="5">K</font>ARVE <font size="5">N</font>AGAR </b><p>North Indian, Chinese, Continental.</p></font></div></font></div>
	
</div>


<div class="footer">
  <p>GOOD FOOD,GOOD MOOD!</p>
</div>
</body>
</html>
