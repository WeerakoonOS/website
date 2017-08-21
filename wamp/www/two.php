<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'phppractise';

// define('HOST','localhost'
	// 	'DBUSER','root'
	// 	'PASSWORD',''
	// 	'DB','dulitha');



$conn = mysqli_connect('localhost', 'root', '');//connrcting the connection

//var_dump($conn);
//checking whether there is a connection error

if(!$conn){
	die("Connection failed".mysqli_connect_error());
	//or use --> 
	//echo "connection not established",mysqli_connect_error();
}


echo "connected successfully!";

mysqli_select_db($conn, "phppractise") or die("connection Failed!");//object link, string db name

$id=$_POST["id"];
$name=$_POST["Name"];
$age=$_POST["Age"];
$address=$_POST["Address"];

$query1="INSERT INTO phpqueries (ID, Name, BirthDate, Address) VALUES ('$id', '$name', '$age', '$address')";

mysqli_query($conn, $query1);
echo "Successfully Entered!";

$query2="DELETE * FROM phpqueries 
	WHERE 
	ID= 1";

mysqli_query($conn, $query2);
echo "Successfully Deleted!";
//$sql="SELECT * FROM phpqueries";



 ?>