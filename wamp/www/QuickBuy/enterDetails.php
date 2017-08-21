<?php 
include ("./connect_db.php");
 
$query1 = "INSERT INTO quickbuy_main ( 'Name', 'Brand', 'Price', 'Owner Details') VALUES ('Samsung J5', 'Samsung', '20000', 'Nimal karunaratne 091223243 Galle Sri Lanka')";

if ($conn) { 
    die("Connection failed! : " . mysqli_connect_error()); 
}else{ echo "Connected successfully !";
}

?>

	<form action="./login.php">
			<button class="button" id="signinbtn">Already a member?</button>
		</form>
		<form action="./signup.php">
			<button class="button">Sign Up</button>
			</form>
			
