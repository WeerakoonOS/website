<!DOCTYPE html>
<html>
<head>
	<title>Form using PHP and mysql</title>
</head>
<body>

<?php 

require('user.php');

if(isset($_POST['add'])) ;

$localhost='localhost';
$username='root';
$password='';

$conn=mysqli_connect($localhost, $username, $password);

if(!$conn)
	die("Connection Failed!".mysqli_connect_error()."</br");
else
	echo "Sucessfully connected</br>";

$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];

mysqli_select_db($conn, "THIS");

$query2="INSERT INTO this_table
		 (name,age,address)
		 VALUES
		 ('$name','$age','$address')";

$query3=mysqli_query($conn,$query2);

if(!$query3)
	die("Creation Failed!".mysqli_connect_error()."</br");
else
	echo "Sucessfully created</br>";

$query4="DELETE FROM this_table 
		 WHERE Name='Sanjani' AND Age='26'";

$query5=mysqli_query($conn, $query4);

if(!$query5)
	die("Creation Failed!".mysqli_connect_error()."</br");
else
	echo "Sucessfully created</br>";

$query6="UPDATE this_table SET Name='Kalani'
	     WHERE Name='Madhini'";

$query7=mysqli_query($conn, $query6);

mysqli_close($conn);

/*$sql="CREATE DATABASE THIS2";

$query=mysqli_query($conn,$sql);

if(!$query)
	die("Cannot create daabase!".mysqli_connect_error()."</br>");
else
	echo "Sucessfully created</br>";*/

/*echo "<table border='1' cellpadding = '10px'>
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Adress</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Oshani</td>
				<td>23</td>
				<td>Galle</td>
			</tr>
		<tbody>
		<tfoot>
			<tr>
				<td colspan= 3 >Customer Details</td></tr>
		</tfoot>
	  </table>";
*/

?>
<form method="post" action= "<?php $_PHP_SELF ?>">
<table width="600" border="0" cellspacing="1" cellpadding="2"> 
	<tr> 
		<td width="250">Your Name</td> 
		<td><input name="name" type="text" id="name"> </td> 
	</tr> 
	<tr> 
		<td width="250">Age</td> 
		<td><input name="age" type="number" id="age"></td>
	</tr>
	<tr>
		<td width="250">Address</td> 
		<td><input name="address" type="text" id="address"</td>
	</tr>
	<tr> 
		<td width="250"></td> 
		<td> <input name="add" type="submit" id="add" value="Add Details"></td> 
	</tr> 
</table>
</form>

</body>
</html>