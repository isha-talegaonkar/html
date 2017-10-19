<?php

session_start();

$db_name="pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$cnt = 0;
$sr = 1;

$temp = $_SESSION['cid'];
if($temp==0||$temp==null||$temp==false)
{
echo "<script>alert('You need to log in first... ');window.location.href='main.html';</script>"; 	
}
else
{
echo"<html><body><img src=billimg.png></body></html>";

echo"<html><body><div align=left padding=10><a href=main.html>BACK TO MAIN PAGE</a></div><div align=center padding=10><a href=restaurantlist.html>RESTAURANT LIST</a></div><div align=right padding=10><a href=logout.php>LOGOUT</a></div></body></html>";

$temp1 = $_SESSION['cid'];

$name = "SELECT name FROM customer WHERE cid=$temp1";
$n1 = mysql_query($name);
$n2 = mysql_fetch_object($n1);

echo"<html><body><center><h3>Hello $n2->name !!Thankyou for placing an order with <font color=red>Pune Food Cravings</font>Visit Again!</h3></center></body></html>";

echo"<html><body></body></html>";
echo "<html><center><h1>BILL</h1></center></html>";

echo"<html><body><center><table border=5 padding=5 width=70%><tr><th>sr no</th><th>item</th><th>price</th><th>quantity</th><th>total</th></tr>";

// Check connection trying
if(isset($_POST['submit']))//to run PHP script on submit
{
$q1=$_POST['r'];
$q2=$_POST['s'];
$q3=$_POST['t'];

	if($_POST['check_list']==NULL)
	{
		if($q1 !=0 )
		{
			echo "<script>alert('please select item');window.location.href='restaurant2menu1.php';</script>";		
		}
		if($q2 !=0 )
		{
			echo "<script>alert('please select item');window.location.href='restaurant2menu1.php';</script>";		
		}
		if($q3 !=0 )
		{
			echo "<script>alert('please select item');window.location.href='restaurant2menu1.php';</script>";		
		}
	}
	elseif(!empty($_POST['check_list']))// Loop to store and display values of individual checked checkbox.
	{

		foreach($_POST['check_list'] as $selected )
		{
			
			//echo $selected."</br>";		
			$sql = "SELECT rid FROM items WHERE iid='$selected'";
			$res = mysql_query($sql);
			$value2 = mysql_fetch_object($res);
			$_SESSION['rid'] = $value2->rid;
			//echo $value2->rid."</br>";
			//echo $_SESSION['cid']."</br>";
			//echo $temp."</br>";
			$date = date('Y-m-d H:i:s');	
			//echo $date."</br>";
			$cnt++;
			//echo $cnt;

			if($cnt==1)
			{
				$sql2 = "INSERT INTO selects(date, cid, rid)values('$date', '$temp', '$value2->rid')";
				$res1=mysql_query($sql2);
			}

			
			if($selected=='21')
			{
				if($q1==NULL)
				{
					echo "<script>alert('please enter quantity');window.location.href='restaurant2menu1.php';</script>";
				}
				else
				{
			//echo "in if";
			$sql4 = "SELECT price FROM items WHERE iid='21'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			
			$sql3 = "INSERT INTO orders(rid, iid,price, quantity, total) values('$value2->rid', '$selected', 				'$value4->price', '$q1', NULL)"; 
			$res2=mysql_query($sql3);
			$pri = $value4->price;
			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);
			
			$new6 = "SELECT iname FROM items WHERE iid='21'";
			$nres6 = mysql_query($new6);
			$nvalue6 = mysql_fetch_object($nres6);

			$new7 = "SELECT total FROM orders WHERE iid='21'";
			$nres7 = mysql_query($new7);
			$nvalue7 = mysql_fetch_object($nres7);

			echo"<tr><td>$sr</td><td>$nvalue6->iname</td><td>$pri</td><td>$q1</td><td>$nvalue7->total</td></tr>";	
			$sr++;
				}
			}
			elseif($selected=='22')
			{
			//echo "in if";
				if($q2==NULL)
				{
					echo "<script>alert('please enter quantity');window.location.href='restaurant2menu1.php';</script>";
				}
				else
				{
			$sql4 = "SELECT price FROM items WHERE iid='22'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			$sql3 = "INSERT INTO orders(rid, iid,price, quantity, total) values('$value2->rid', '$selected', 				'$value4->price', '$q2', NULL)"; 
			$res2=mysql_query($sql3);

			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);	

			$new8 = "SELECT iname FROM items WHERE iid='22'";
			$nres8 = mysql_query($new8);
			$nvalue8 = mysql_fetch_object($nres8);

			$new9 = "SELECT total FROM orders WHERE iid='22'";
			$nres9 = mysql_query($new9);
			$nvalue9 = mysql_fetch_object($nres9);

			echo"<tr><td>$sr</td><td>$nvalue8->iname</td><td>$value4->price</td><td>$q2</td><td>$nvalue9->total</td></tr>";	
			$sr++;
				}

			}
			elseif($selected=='23')
			{
				if($q3==NULL)
				{
					echo "<script>alert('please enter quantity');window.location.href='restaurant2menu1.php';</script>";
				}
				else
				{
			//echo "in if";
			$sql4 = "SELECT price FROM items WHERE iid='23'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			$sql3 = "INSERT INTO orders(rid, iid, price, quantity, total) values('$value2->rid', '$selected', 				'$value4->price', '$q3', NULL)"; 
			$res2=mysql_query($sql3);

			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);	
	
			$new10 = "SELECT iname FROM items WHERE iid='23'";
			$nres10 = mysql_query($new10);
			$nvalue10 = mysql_fetch_object($nres10);

			$new11 = "SELECT total FROM orders WHERE iid='23'";
			$nres11 = mysql_query($new11);
			$nvalue11 = mysql_fetch_object($nres11);

			echo"<tr><td>$sr</td><td>$nvalue10->iname</td><td>$value4->price</td><td>$q3</td><td>$nvalue11->total</td></tr>";	
			$sr++;
			echo"</center></table></html>";
				}			
			}
		}
		$sql6 = mysql_query('SELECT SUM(total) AS final_sum FROM orders');
		$row = mysql_fetch_assoc($sql6);
		$sum = $row['final_sum'];
		$val=0.1;
		$val1=$sum*$val;
		$fsum=$sum-$val1;
		$_SESSION['fsum']=$fsum;
		//echo $sum;
$new1 = "INSERT INTO bill(billno,billamt, bdate, cid, rid) values(NULL,'$sum', '$date', '$temp', '$value2->rid')";
$result = mysql_query($new1);

$address = "SELECT address FROM customer WHERE cid=$temp";
$add1 = mysql_query($address);
$fetch = mysql_fetch_object($add1);

$sql7 = "INSERT INTO hbill2(sno,billamt,bdate) values(NULL,'$sum','$date')";
$res7 = mysql_query($sql7);

$sql8="delete from bill";
$res8=mysql_query($sql8);

$sql9="delete from orders";
$res9=mysql_query($sql9);
		
	}
}
echo"<html><center><br/><br/><h3>Your bill amount is: ₹$sum</h3></center></html>";
echo"<html><center><br/><br/><h3> Congratulations!! You are eligible for a 10% discount!!</h3></center></html>";
echo"<html><center><br/><br/><h3>Your final bill amount is <br>$sum - $val1 = $fsum</h3></center></html>";
echo "<html><h3>Your delivery address is: $fetch->address</h3></html>";
echo"<html><body><center><img src=deliveryboy1.gif></center></body></html>";
echo"<html><body><center><h3>Your food is on its way!</h3></center></body></html>";
echo "<script>window.open('/fpdf181/test1.php','_blank')</script>";
}
$conn->close();
?>
