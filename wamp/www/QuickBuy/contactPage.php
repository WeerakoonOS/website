<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">
	<link rel="stylesheet" type="text/css" href="contactPage.css">

</head>
<body>
<div id="container">
	<div id="header">
		<div id="signin">
		<!-- //<form action="./login.php"> -->
			<button class="button" id="signinbtn">Already a member?</button>
		<!-- //</form> -->
		<!-- //<form action="./signup.php"> -->
			<button class="button">Sign Up</button>
			<!-- //</form> -->
			
		</div>
		<div id="logo">
			<img src="./img/logo.jpg">
		</div>
		<div>
			<p id="stext1"> Welcome to QuickBuy.lk !</p>
		</div>
		<div id="top_info">
			<form id="searchform" action="searchResults.php" method='post'>
				
				<input type="text" id="stext2" placeholder="Search Here" name="searchText">
				<input type="button" id="sbutton" value="Search">

			</form>
		</div>
		
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php">Categories</a>
  				</li>
				<li><a href="./contactPage.php" style="background-color: #D8D3D3;">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>

<div class="container2" align="center" align="center">
  <form id="contactfrom" action="./contactPage.php" style="margin-top: 100px; width: 25%; text-align: left;">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="country">Email</label>
    <input type="email" id="email2" name="email" placeholder="Your E-mail..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<?php
	/*var_dump($_POST['button2']);
	var_dump($_POST['name']);
	var_dump($_POST['price']);*/
    if(isset($_POST['submit'])){
    	// if(!empty($_POST['fname'])&&($_POST['lname'])&&($_POST['email'])&&($_POST['subject'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        echo "a";
		$sql="INSERT INTO `cust_inquiries`(`fname`, `lname`, `email`, `subject`) VALUES ('$fname','$lname','$email','$subject')";
            $res1=mysqli_query($conn,$sql)
            	or die(mysqli_error($conn));
            // if($res1){
            // 		echo mysqli_connect_error($conn);
            // }
        // }
   	}
    ?>

</body>
</html>