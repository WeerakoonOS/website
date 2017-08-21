<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quickbuy";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connections
	if (! $conn) { 
    	die("Connection failed! : " . mysqli_connect_error()); 
	}
	//else{ echo "Connected successfully !";
	//}

 ?>