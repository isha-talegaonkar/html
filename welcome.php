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
    background-color: #111;
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
</style>
</head>
<body>

<ul>
  <li><a class="active" href="welcome.html">Home</a></li>
  <li><a href="aboutuspage.html">About</a></li>
  <li><a href="restaurantlist.php">Restaurants</a></li>
  <li><a class="active" href="logout.php">Logout</a></li>
	  <li><a class="active" href="cance.html">Cancel Order</a></li>
</ul>

<div class="background">
  <div class="transbox">
    <center><p class="title">PUNE FOOD CRAVINGS</p></center>
  </div>
</div>
<br/><br/>
<form>
  <input type="text" name="search" placeholder="Search..">
</form>



<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="floating-box">
   <a href="category.html"><img src="fb2.jpg" style="height:200px; width:350px"></a><span class="caption" ><br><b><font color="green">Categories</font><b></span>
</div>
<div class="floating-box">
   <a href="restaurant2.html"><img src="fb3.jpg" style="height:200px; width:350px"></a><span class="caption" ><br><b><font color="green">Offers</font><b></span>
</div>
<br/><br/>
<div class="floating-box">
   <a href="trending.php"><img src="fb4.jpg" style="height:200px; width:350px"></a><span class="caption" ><br><b><font color="green">Trending this week</font><b></span>
</div>
<div class="floating-box">
    <a href="rateus.php"><img src="fb5.jpg" style="height:200px; width:350px"></a><span class="caption" ><br><b><font color="green">Feedback</font><b></span>
</div>
<br/><br/><br/>
<div class="footer">
<br/>
  <center>
   <a href="instagram.com" alt="instagram"><i class="fa fa-instagram" style="font-size:48px;color:white"></i></a>
   <a href="facebook" alt="facebook"><i class="fa fa-facebook" style="font-size:48px;color:white"></i></a>
   <a href="twitter" alt="twitter"><i class="fa fa-twitter" style="font-size:48px;color:white"></i></a>
  </center>
</body>
</html>

