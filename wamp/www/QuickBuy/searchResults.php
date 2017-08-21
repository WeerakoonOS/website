<?php
include ("./connect_db.php");
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">

	<style>
		table {
			width : 800px;
			margin-top: 20px;
			margin-left: 300px;
			border: 5px solid #ddd;
			border-collapse: collapse;
			vertical-align: center;

		}
		th,td {
			padding:10px;
			font-family: sans-serif;
			text-align:center;
		}
		th {
			text-align: center;
			font-weight: bold;
			color: white;
			background-color: #4CAF50;
		}
		.table1{
			margin: 20px;

		}
	</style>

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
				<li><a href="./categoryPage.php">Categories</a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>
</div>
<br>
<br>
<br>

<div>
<h1>Item Details</h1>
<br>
<br>
<!-- <h1 align="center">Details</h1> -->
	<table border="1" align="center" style="line-height:25px;">
	<tr>
		<th>Item ID</th>
		<th>Name</th>
		<th>Brand</th>
		<th>Price</th>
	</tr>
	<?php
	echo "b";
	if (isset($_POST['search'])) {
		echo "a";
		$item = $_POST['searchText'];
		$query = "select * from item_main WHERE name='$item'";
		echo "aa";
		$result = mysqli_query($conn,$query)
			or die(mysqli_error($conn));
		while ($row = mysqli_fetch_array($result)) {
			$itemid = $row['item_id'];
			$name = $row['name'];
			$brand = $row['brand'];
			$price = $row['price'];
			// $owner = $row['seller_id'];
			echo 
			"<tr>
				<td> $itemid </td>
				<td> $name </td>
				<td> $brand </td>
				<td> $price </td>
				
			</tr>";
		}
	}
?>
</div>
</table>
</body>
</html>