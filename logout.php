<?php

session_start();  //session is a way to store information (in variables) to be used across multiple pages. 

$host="localhost";

$username="root";

$password="password";

$db_name="pfc";

//$conn = mysqli_connect("$host","$username","$password", $db_name)or die("cannot connect");
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql="delete from selects";

if ($conn->query($sql) === TRUE) 
{
    echo "Record deleted successfully";
    session_destroy();  
    header("Location: main.html");//use for the redirection to some page 
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>  
