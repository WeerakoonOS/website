<?php 

$x=5;
$y=4;

echo (($x > 1) xor ($y>1));
echo "</br>";

/*$x=19;

if ($x%2==0)
	echo "<br>Even Number";
elseif ($x%5==0)
	echo "<br>Divisible by 5";
else
	echo "<br>Not a even number or divisible by 5";*/

/*$x=5;
$y=10;

function myTest(){
	//echo "$x.$y"; global varibles cant be seen from functions
	$GLOBALS['x'] += $GLOBALS['x'];
}
myTest();
echo "$x";*/

/*$x=5;
$y=10;

function myTest(){
	global $x,$y;//making global varibales visible inside function
	$y=2*$x+$y;
	$total=$x+$y;
	echo "$y</br>";
	echo "$x+$y =", 25;
	echo "<h1>$total</h1>";
}
MyTest();
*/
/*define("ONE", 1);//constant identifiers enables access to any of scope
define("TWO", 2);
define("THREE", 3);

function myTest(){
	static $x=5;//makes x static out of function too
	$y=10;
	$x=$x+$y;
	echo "$x ",ONE,"</br>";
	define("FOUR", 4);
}

myTest();
myTest();
echo FOUR;
*/

/*$x="Dadda";
$y="Mama";
$z="and";

echo $x." ".$z." ".$y;//string concatenation
echo "</br>";
echo $x.=$y;
echo "</br>";
echo $x.$y;
echo "\"$x\"";
*/

/*$x="100";
$y=100;

if($x!==$y xor $x<>$y)
	echo "Hello World";
*/

/*$x=5;
//$x++;
//++$x;
echo ++$x, "</br>";
//cho $x;*/

/*$arr = array('one' => 1 ,'two' => 2 ,'three' => 3 ,'four' => 4 );
echo $arr['one'];
echo "</br>";
echo $arr['three'];
echo "</br>";

$arr2= array(1,3,5,7,9);
echo $arr2[0];
echo "</br>";
echo $arr2[4];*/

$arr3 = array('numb1' => array('one' => 1 ,'two' => 2 ,'three' => 3 ,'four' => 4), 'numb2' => array(5,6,7), 'numb3' => 8, 'numb4' => 9 );// associateive multidimensional array

echo $arr3['numb1']['two'];
echo "</br>";
echo $arr3['numb3'];
echo "</br>";
echo $arr3['numb2'][1];
echo "</br>";

foreach ($arr3 as $key => $value) {
	echo $key." "."</br>".(int)$value;
		if (count($value)!=0) {
			foreach ($value as $key => $value2) {
			echo $value2."</br>";
			}
		}else
		echo (int)$value."</br>";
	}
/*$arrLenght = count($arr3);

for ($i=0; $i < $arrlength ; $i++) { 
	for ($j=0; $j < count($arr3[i]) ; $j++) { 
		echo $arr3[i][j];
	}
}

$arr4  = array(array("I", "Me", "Mine"),array("likes", "loves"), array("Galle", "Matara", "Apura","Kegalle"));//numerical multidimensional array

echo $arr4[1][1];
echo "</br>";
echo $arr4[0][2];
echo "</br>";
echo $arr4[2][3];
echo "</br>";

for ($i=0; $i < count($arr4); $i++) { 
	echo "<ul>";
	for ($j=0; $j < count($arr4[$i]) ; $j++) { 
		echo "<li>".$arr4[$i][$j]."</li>";}
	echo "</ul>";
}
/*
foreach ($arr3 as $key => $value) {
	echo (int)$value."</br>";
}

foreach ($arr4 as $value) {
	echo (string)$value;
}
*/

/*foreach ($arr3 as $key => $value) {
	echo $value;
}*/
 ?>

