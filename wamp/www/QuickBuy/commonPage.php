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
			<form id="searchform" action="searchResults.php" method='post'>
				
				<input type="text" id="stext2" placeholder="Search Here" required>
				<input type="button" id="sbutton" value="Search">

			</form>


		</div>
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php"></a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.html">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>


</body>
</html>