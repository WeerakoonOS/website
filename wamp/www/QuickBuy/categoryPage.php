<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">
	<link rel="stylesheet" type="text/css" href="categoryPage.css">

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
				<li id="selected_item"><a href="./categoryPage.php">Categories</a>
  				</li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>

<div align="center" id="catgrid">
	<table border="0" align="center" style="margin-top: 150px;">
		<tr>
			<td>
				<a href=""><img src="./img/apple.png" class="image">
			</td>
			<td>
				<a href=""><img src="./img/samsung.png" class="image">
			</td>
			<td>
				<a href=""><img src="./img/lg.png" class="image">
			</td>
			<td>
				<a href=""><img src="./img/asus.jpg" class="image">
			</td>
		</tr>

		<tr>
			<td>
				<h1 class="name">Apple</h1>
			</td>
			<td>
				<h1 class="name">Samsung</h1>
			</td>
			<td>
				<h1 class="name">LG</h1>
			</td>
			<td>
				<h1 class="name">Asus</h1>
			</td>
		</tr>

		<tr>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/huawei.jpg" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/xiaomi.png" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/lenovo.png" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/blackberry.png" class="image">
			</td>
		</tr>

		<tr>
			<td>
				<h1 class="name">Huawei</h1>
			</td>
			<td>
				<h1 class="name">Xiaomi</h1>
			</td>
			<td>
				<h1 class="name">Lenovo</h1>
			</td>
			<td>
				<h1 class="name">Blackberry</h1>
			</td>
		</tr>

		<tr>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/motorola.jpg" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/nokia.png" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/nexus.png" class="image">
			</td>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/oppo.png" class="image">
			</td>
		</tr>

		<tr>
			<td>
				<h1 class="name">Motorola</h1>
			</td>
			<td>
				<h1 class="name">Nokia</h1>
			</td>
			<td>
				<h1 class="name">Nexus</h1>
			</td>
			<td>
				<h1 class="name">Oppo</h1>
			</td>
		</tr>

		<tr>
			<td style="padding-top: 60px;">
				<a href=""><img src="./img/google.jpg" class="image">
			</td>
		</tr>

		<tr>
			<td>
				<h1 class="name">Google</h1>
			</td>
		</tr>
	</table>
</div>

</body>
</html>