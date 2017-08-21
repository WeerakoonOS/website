<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/iframe.css" rel="stylesheet" type="text/css">
<style type="text/css">
#content table {
	margin-top: 30px;
	font-size: 15px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
td p #button , td p #button2{
	padding-right: 10px;
	padding-left: 10px;
	margin-right: 115px;
}
tr {
	text-align: right;
}
</style>
</head>

<body>
<div id="content">
  <div id="frame_head">Add Customer Form</div>
<form method="post" action="">
  <table width="500px" align="center"> 
    <tbody>

      <tr>
          <td><label for="cus_name">
                  <p>Customer Name</p>
              </label></td>
          <td><input name="cus_name" type="text" id="cus_name" size="35"></td>
      </tr>
      <tr>
        <td><label for="cus_nic">
          <p>NIC No</p>
        </label></td>
        <td><input name="cus_nic" type="text" id="cus_nic" size="35"></td>
      </tr>
      <tr>
        <td><label for="add1">
          <p>Address Line 1</p>
        </label></td>
        <td><input name="add1" type="text" id="add1" size="35"></td>
      </tr>
      <tr>
          <td><p>Address Line 2</p></td>
          <td><input name="add2" type="text" id="add2" size="35"></td>
      </tr>
      <tr>
          <td><p>Address Line 3</p></td>
          <td><input name="add3" type="text" id="add3" size="35"></td>
      </tr>
      <tr>
        <td><p>
          <label for="cus_email">Email</label>
        </p></td>
        <td><input name="cus_email" type="email" id="cus_email" size="35"></td>
      </tr>
      <tr>
        <td>Contact No</td>
        <td><input name="cus_contact" type="tel" id="cus_contact" size="35"></td>
      </tr>
      <tr>
        <td colspan="2"><p>
          <input type="button" name="button" id="button" value="Cancel">
          <input type="submit" name="button2" id="button2" value="Save">
        </p></td>
      </tr>
    </tbody>
  </table>
</form>
</div>
<?php

require '../dbcon/user.php';
require '../dbcon/dbcon.php';
?>
<?php


if(isset($_POST['button2'])){
    $cus_id=$_POST['cus_id'];
    $cus_name=$_POST['cus_name'];
    $cus_nic=$_POST['cus_nic'];
    $add1=$_POST['add1'];
    $add2=$_POST['add2'];
    $add3=$_POST['add3'];
    $cus_email=$_POST['cus_email'];
    $cus_contact=$_POST['cus_contact'];
    $sql = "INSERT INTO tb_cus (`cus_name`,`cus_nic`,`add1`,`add2`,`add3`,`cus_email`,`cus_contact`) VALUES ('$cus_name','$cus_nic','$add1','$add2','$add3','$cus_email','$cus_contact')";
    $res1=mysqli_query($conn,$sql);
    phpAlert("Customer added to database");


}
else{

}



?>
</body>
</html>
