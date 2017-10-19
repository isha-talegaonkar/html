
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

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

/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=email] {
    width: 80%;
    padding: 16px 26px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
   
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */


/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
  <li><a class="active" href="main.html">Home</a></li>
  <li><a href="oneform.php">Signup</a></li>
  <li><a href="aboutuspage.html">About</a></li>
  <li><a href="restaurantlist.html">Restaurants</a></li>
  <li><a href="adminlogin.html">Admin Login</a></li>
</ul>

<div class="background">
  <div class="transbox">
    <center><p class="title">PUNE FOOD CRAVINGS</p></center>
  </div>
</div>
<?php

$conn = mysql_connect("localhost","root","password")or die("cannot connect");
mysql_select_db("pfc")or die("cannot select db");	
// define variables and set to empty values
$count = 0;
$exists =0;
$nameErr = $emailErr = $pinErr = $numErr = $addrErr = $passErr = $cpassErr = "";
$name = $email = $number = $pincode = $address = $password = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	}	 
	else 
	{
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
			$nameErr = "Only letters and white space allowed";
		}
		else
		{
			$count++;
		}
		
  	}  
	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
  	} 
	else 
	{
		$email = test_input($_POST["email"]);
    		// check if e-mail address is well-formed

    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
      			$emailErr = "Invalid email format";
    		}
		else
		{
			$mytry = mysql_query("SELECT email FROM customer WHERE email='$email'");
			if(mysql_num_rows($mytry)==0)
			{
				$count++;
			}
			else	
			{
				$exists=1;
			}


		}
  	}
	if (empty($_POST["num"])) 
	{
		$numErr = "Number is required";
  	} 
	else 
	{
		$number = $_POST["num"];
    		if ($number >= 1000000000 && $number <= 9999999999) 
		{
			$count++;

    		}
		else
		{
      			$numErr = "Invalid number format";
		}
  	}
	
	if (empty($_POST["pin"])) 
	{
		$pinErr = "Pincode is required";
  	} 
	else 
	{
		$pincode = $_POST["pin"];
    		if ($pincode > 400000 && $pincode < 500000) 
		{
			$count++;

    		}
		else
		{
      			$pinErr = "Invalid Pin format";
		}
  	}
	$address = $_POST["address"];
	if (empty($_POST["address"])) 
	{
		$addrErr = "Address is required";
  	} 
	else 
	{
		$count++;
  	}
	$password = $_POST["password"];
	if (empty($_POST["password"])) 
	{
		$password = "Password is required";
  	} 
	else 
	{
		$count++;
  	}
	$cpassword = $_POST["cpassword"];
	if (empty($_POST["cpassword"])) 
	{
		$cpassErr = "This Field is Required";
  	} 
	else 
	{
		if($password == $cpassword)
		{
			$count++;
		}
		else
		{
			$cpassErr = "Passwords do not match!";
		}
  	}


	if($count==7 && $exists==0)
	{
		$sql10 = "INSERT INTO customer(cid,name,address,password,email, pincode,mob_no) VALUES (NULL,'$name','$address','$password', '$email','$pincode','$number')";
						
		$res10=mysql_query($sql10);
		echo "<script>alert('Successfully Registered!Login to continue...');window.location.href='main.html';</script>";

		//echo"success";
		//echo "<script>window.open('main.html','_self')</script>";  
	
	}
	elseif($exists==1)
	{
			echo "<script>alert('Email already exists. Please login');window.location.href='main.html';</script>";
	}
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<h2>SIGNUP FORM</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="border:1px solid #ccc; height:800px; width:700px">  

  Name: <br><input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter Name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <br><input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Number:<br><input type="number" name="num" value="<?php echo $number;?>" placeholder="Enter Number">
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>
 Address: <br><input type="text" name="address" value="<?php echo $address;?>" placeholder="Enter Address">
  <span class="error">* <?php echo $addrErr;?></span>
 <br><br>
 Pincode: <br><input type="number" name="pin" value="<?php echo $pincode;?>" placeholder="Enter Pincode">
  <span class="error">* <?php echo $pinErr;?></span>
  <br><br>
 Password: <br><input type="password" name="password" value="<?php echo $password;?>" placeholder="Enter Password">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
 Confirm Password: <br><input type="password" name="cpassword" value="<?php echo $cpassword;?>" placeholder="Confirm Password">
  <span class="error">* <?php echo $cpassErr;?></span>
  <br><br>
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn"  onsubmit="return myFunction4()">Sign Up</button>
</form>
</center>
</body>
</html>


