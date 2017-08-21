<?php
echo "<table>
	</table>";
	$server= 'localhost';
	$username='root';
	$password='';
	$db='dulitha';

	// define('HOST','localhost'
	// 	'DBUSER','root'
	// 	'PASSWORD',''
	// 	'DB','dulitha');

		//connrcting the connection
	$conn=mysqli_connect($server,$username,$password,$db);
	var_dump($conn);

//checking whether there is a connection error
	if(!$conn){
		echo "connection not established",mysqli_connect_error();
		//ELSE USE DIE
		//die("connection not established".mysql_connect_error());
	}
		//sql query
	$sql="SELECT * FROM student";
		//mysqli_query(connection variables,sl query)
	//mysqli_query($conn,$sql);
	//get results to variables
	$res=mysqli_query($conn,$sql);
	var_dump($res);

	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){ //assoc=associative array
			echo $row['st_id'];
			echo"<br>";
			echo$row['st_name'];
			echo "<br>";
			echo $row['st_address'];
			echo"<br>";
			echo $row['st_age'];
			echo"<br>";
			echo"<br>";
		}
	}
	else{
		die('No data in the table');
	}

	