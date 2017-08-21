<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quickbuy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}








session_start();       
if(isset($_POST["submit"])){


$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']); 
echo $username;
echo $password;
$sql = " SELECT fname FROM seller_info WHERE username = '$username' and password = '$password' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
$count = mysqli_num_rows($result);
	
// If result matched $username and $password, table row must be 1 row
		
if($count == 1) {
	//session_register("username");
	$_SESSION['login_user'] = $username;

         
	header("location: index.php"); //LANDING PAGE
				}
else {
#echo "<br>" . "<h2>Sorry! Your Login Name or Password is invalid</h2>";
echo "<script type= 'text/javascript'>alert('Sorry! Your Login Name or Password is invalid');</script>";
header('Location: login.php');
}      

$conn->close();
}
?>


