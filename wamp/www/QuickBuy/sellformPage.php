<?php 
include ("./connect_db.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Your Ad Here</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">
	<link rel="stylesheet" type="text/css" href="sellformPage.css">

</head>
<body>
<div id="container">
	<div id="header">
		<div id="signin">
			<button class="button" id="signinbtn">Already a member?</button>
			<button class="button" onclick="window.location.href='./signUp.html'">Sign Up</button>
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
				<li><a href="./categoryPage.php">Brands</a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>

<div id="sellformdiv">
	<form id="sellform" method="post" action="#">
		<h1 class="text2">Enter Details<br></h1>
		<br>

		<select class="alltext" name="name">
		    <option value="brand">Brand</option>
		    <option value="apple">Apple</option>
		    <option value="asus">Asus</option>
		    <option value="blackberry">Blackberry</option>
		    <option value="google">Google</option>
		    <option value="huawei">Huawei</option>
		    <option value="lenovo">Lenovo</option>
		    <option value="lg">LG</option>
		    <option value="motorola">Motorola</option>
		    <option value="nexus">Nexus</option>
		    <option value="nokia">Nokia</option>
		    <option value="oppo">Oppo</option>
		    <option value="samsung">Samsung</option>
		    <option value="sony">Sony</option>
	  	</select>

	  	<br>
	  	<br>

	  	<input class="alltext" type="text" name="brand" placeholder="The brand of the phone...">

		<br>
		<br>

		<h1 class="text2">Price<br></h1>
		<input class="alltext" type="number" name="price" placeholder="price">

		<br>
		<br>
		
		<hr>
		<br>
		<h1 class="formlable">Seller_ID</h1>
		<input class="alltext" type="text" name="seller_id" placeholder="Enter seller_id here...">
		<br>
		<p>
        <input type="button" name="button" id="button" value="Cancel" onclick="clear()">
        <input type="submit" name="button2" id="button2" value="Submit">
        </p>
		
	</form>
	</div>
	
	<?php
	/*var_dump($_POST['button2']);
	var_dump($_POST['name']);
	var_dump($_POST['price']);*/
    if(isset($_POST['button2'])){
    	if(!empty($_POST['name'])&&($_POST['brand'])&&($_POST['price'])&&($_POST['seller_id'])){
        $name=$_POST['name'];
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $seller_id=$_POST['seller_id'];

		$sql="INSERT INTO `seller_info`(`name`, `brand`, `price`, `seller_id`) VALUES ('$name','$brand','$price','$seller_id')";
            $res1=mysqli_query($conn,$sql);
            // if($res1){
            // 		echo mysqli_connect_error($conn);
            // }
        }
   	}
    ?>

</body>
</html>
