<?php

session_start();

$db_name = "pfc";

$conn = mysql_connect("localhost", "root", "password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select db");

$cnt = 0;

// Check connection trying
if(isset($_POST['submit']))//to run PHP script on submit
{
$q1=$_POST['r'];
$q2=$_POST['s'];
$q3=$_POST['t'];


	if(!empty($_POST['check_list']))// Loop to store and display values of individual checked checkbox.
	{

		foreach($_POST['check_list'] as $selected )
		{
			
			echo $selected."</br>";		
			$sql = "SELECT rid FROM items WHERE iid='$selected'";
			$res = mysql_query($sql);
			$value2 = mysql_fetch_object($res);
			$_SESSION['rid'] = $value2->rid;
			$_SESSION['orderid'] = 1;
			//echo $value2->rid."</br>";
			//echo $_SESSION['cid']."</br>";
			$temp = $_SESSION['cid'];
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

			
			if($selected=='11')
			{
			echo "in if";
			$sql4 = "SELECT price FROM items WHERE iid='11'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			
			$sql3 = "INSERT INTO orders(rid, iid,orderid, price, quantity, total) values('$value2->rid', '$selected', 1, 				'$value4->price', '$q1', '300')"; 
			$res2=mysql_query($sql3);

			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);	
	
			}
			elseif($selected=='12')
			{
			echo "in if";
			$sql4 = "SELECT price FROM items WHERE iid='12'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			$sql3 = "INSERT INTO orders(rid, iid,orderid, price, quantity, total) values('$value2->rid', '$selected', '1', 				'$value4->price', '$q2', '300')"; 
			$res2=mysql_query($sql3);

			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);	

			}
			elseif($selected=='13')
			{
			echo "in if";
			$sql4 = "SELECT price FROM items WHERE iid='13'";
			$res4 = mysql_query($sql4);
			$value4 = mysql_fetch_object($res4);
			$sql3 = "INSERT INTO orders(rid, iid,orderid, price, quantity, total) values('$value2->rid', '$selected', '1', 				'$value4->price', '$q3', '300')"; 
			$res2=mysql_query($sql3);

			$sql5 = "UPDATE orders SET total=quantity*price";
			$res5 = mysql_query($sql5);	
	
			
			}
		}
		$sql6 = mysql_query('SELECT SUM(total) AS final_sum FROM orders');
		$row = mysql_fetch_assoc($sql6);
		$sum = $row['final_sum'];
		echo $sum;
$new1 = "INSERT INTO bill(billno, orderid, billamt, bdate, cid, rid) values(NULL, 1, '$sum', '$date', '$temp', '$value2->rid')";
$result = mysql_query($new1);
$_SESSION['orderid']++;
$orderid = $_SESSION['orderid'];		
	}
}
$conn->close();
?>


