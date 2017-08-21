<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bigbangtheory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$sql = "CREATE TABLE ud (
 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
repassword VARCHAR(50),
city VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



if(isset($_POST["submit"])){



$fname = $_POST["fname"];
$lname = $_POST["lname"];
$uname = $_POST["uname"];
$email = $_POST["email"];
$pw = $_POST["pw"];
$pwre = $_POST["pwre"];
$city = $_POST["city"];

$sql = "INSERT INTO ud (firstname, lastname, username, email, password, repassword,city)
VALUES ('$fname','$lname','$uname','$email', '$pw', '$pwre', '$city')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}







