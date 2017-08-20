<?php 
include ("./connect_db.php") 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">

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
			<form id="searchform">
				
				<input type="text" id="stext2" placeholder="Search Here" required>
				<input type="button" id="sbutton" value="Search">

			</form>


		</div>
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php">Categories</a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.html">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>
<!-- signup form body -->
<div id="signupdiv" align="center">
<form id="signupform" align="left" action="" style="border:2px solid ">
<header><center> Signup Form </center></header>


<label align="left"><b>First Name<span id="name1">*</span> </b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>
        <br>

    <label><b>Last Name<span id="name2">*</span></b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

  <br>

    <label><b>City<span id="city1">*</span></b></label>
    <input type="text" placeholder="Enter City" name="city" required>

  <br>

    <label><b>Username<span>*</span></b></label>

    <input type="text" placeholder="Enter Username" name="uname" required>

  <br>

    <label><b>Email<span id="email1">*</span></b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
  <br>

    <label><b>Password<span>*</span></b></label>

    <input type="password" placeholder="Enter Password" name="pw" required>

  <br>

    <label><b>Repeat Password<span id="repass">*</span></b></label>

    <input type="password" placeholder="Re-Enter Password" name="pwrepeat" required>

  <br>
    <br>


    <div class="clearfix" align="center">

  <button type="button" class="cancel">Cancel</button>
  <button type="submit" class="signup">Sign Up</button>
    </div>
</div>
</form>
</body>
</html>