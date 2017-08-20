<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quickbuy";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM quickbuy_main";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">

</head>
<body>
	<h1 align="center">Details</h1>
	<table border="1" align="center" style="line-height:25px;">
	<tr>
		<th>Item ID</th>
		<th>Name</th>
		<th>Brand</th>
		<th>Price</th>
		<th>Owner Details</th>
	</tr>
	<?php
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	
	    	echo "</tr>";

                 echo  $row['index'];
                 echo "<td>"," $row['name']"," </td>";
                 echo "<td>"," $row['brand']"," </td>";
                 echo "<td>"," $row['price']"," </td>";
                 echo "<td>"," $row['ownerDetails']"," </td>";

             echo "</tr>";

	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);
?>


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
				<li>,<a href="./categoryPage.php">Categories</a></li>
				<li><a href="./contactPage.php">Help & Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
	</div>

</div>
</body>
</html>