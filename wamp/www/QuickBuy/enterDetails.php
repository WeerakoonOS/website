<?php 
include ("connect_db.php");
 
$query1 = "INSERT INTO quickbuy_main ( 'Name', 'Brand', 'Price', 'Owner Details') VALUES ('Samsung J5', 'Samsung', '20000', 'Nimal karunaratne 091223243 Galle Sri Lanka')";

if ($conn->connect_error) { 
    die("Connection failed! : " . $conn->connect_error); 
}  
echo "Connected successfully !"


?>
