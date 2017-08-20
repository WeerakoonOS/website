<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Common Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">

</head>
<body>
<div id="container">
	<div id="header">
		<div id="signin">
			  <a href="./signup.php" class="button">Already a member?</a>
			  <a href="./signup.php" class="button">Sign Up!</a>
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
				<li class="dropdown">
    				<a href="javascript:void(0)" class="dropbtn">Brands</a>
    				<div class="dropdown-content">
      					<a href="#">Apple</a>
      					<a href="#">Samsung</a>
      					<a href="#">LG</a>
      					<a href="#">Asus</a>
      					<a href="#">Huawei</a>
      					<a href="#">Xiaomi</a>
      					<a href="#">Lenovo</a>
      					<a href="#">Blackberry</a>
      					<a href="#">Motorola</a>
      					<a href="#">Nokia</a>
      					<a href="#">Nexus</a>
      					<a href="#">Oppo</a>
      					<a href="#">Google</a>
    				</div>
  				</li>
				<li><a href="">Help & Contact</a></li>
				<li id="selected_item"><a href="./aboutPage.html">About Us</a></li>
				<li><a href="">My Account</a></li>
			</ol>
		</div>
	</div>
</div>


</body>
</html>