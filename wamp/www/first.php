<?php 
/* $number=19;
if (number%2==0){
	echo "Even Number";
}
else if (number%5==0){
	echo "Divisible by 5";
}
else{
	echo "Not a even number or divisible by 5";}
	
echo "<br>";

//switch case
$color = "blue";
switch($color){
	case 'red':
		echo "This is red";
		break;
	
	case "green":
		echo "This is green"; */
		
/* 	default:
		echo "This is blue";//is a must
};
echo "<br>";

 //loop
 $x=10;
 while($x>0){
	 echo $x;
	 echo "</br>";
	 $x -=1;
 }
echo "<br>";
  $x=10;
 for($x;$x>0;$x--){
	 echo $x;
	 echo "</br>";
 }
 echo "<br>";
  $x=10;
 do{
	 echo$x;
	 $x-=1;
 }while($x>0) */
	
/* $y=5;
$z=&$y;//bind with y

$z+=3;

echo $y;
echo "</br>"
echo $z; */

/* $arr = ['car', 'van', 'bus']

foreach($arr as $vehicle){
	echo $vehicle;
	echo "</br>";
} */

///arrays.1.indexed array(numerical array) 2.Associative array(key-value array like dict() in python)
//1.define an array with the function

$arr=array('car','van')
var_dump($arr);
echo $arr[1]; 
echo "</br>";
echo $arr[0];

//looping in an array

for($x=0; $x<count()$arr;$x++)
echo $arr[$x];
echo "</br>"
//define an array with the normal method

$arr=["car","bus"]
var_dump($arr);

//2.
$arr2=array("Name"=>"ABC","Address"=>"BCD")
echo $arr2["Name"]
echo "</br>";
echo $arr2["Address"]

foreach($arr2 as $val){
	echo $val;// values without key
	echo "</br>"
}

 
 ?>