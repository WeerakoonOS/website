<?php 
include ("./connect_db.php") 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">
	<link rel="stylesheet" type="text/css" href="loginPage.css">
 
</head>
<body>
<div id="container">
	<div id="header">
		<div id="signin">
			<button class="button" id="signinbtn">Already a member?</button>
			<button class="button">Sign Up</button>
		</div>
		<div id="logo">
			<img src="./img/logo.jpg">
		</div>
		<div>
			<p id="stext1"> Welcome to QuickBuy.lk !</p>
		</div>
		<div id="top_info">
				<form id="searchform" action="searchResults.php" method="post">
				
				<input type="text" name="searchText" id="stext2" placeholder="Search Here" required>
				<input type="submit" id="sbutton" name="search" value="Search">
			</form>
		</div>
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php">Categories</a>
  				</li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>

<form id=login method="POST" action="loginVal.php">

  <h2>Login</h2>
  <label>Username <span>*</span></label>
  	<input type="text" name="username">
  	<br>
  <div class="help">At least 6 character</div>
  	<br>
  	<br>
  	<label>Password <span>*</span></label>
	<input type="text" name="password">
	<br>
  <div class="help">Use upper and lowercase lettes as well</div>
  	<br>
  	<input type="submit" value="Login" name="submit">

</form>

<?php

session_start();       
if(isset($_POST["submit"])){

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']); 

$sql = " SELECT fname FROM seller_info WHERE username = '$username' and password = '$password' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
$count = mysqli_num_rows($result);
	
// If result matched $username and $password, table row must be 1 row
		
	if($count == 1) {
		//session_register("username");
		$_SESSION['login_user'] = $username;      
		header("location: home.php"); //LANDING PAGE					}
	}else {
		echo "<br>" . "<h2>Sorry! Your Login Name or Password is invalid</h2>";
		echo "<script type= 'text/javascript'>alert('Sorry! Your Login Name or Password is invalid');</script>";
	}      

$conn->close();
}
?>

</body>
</html>