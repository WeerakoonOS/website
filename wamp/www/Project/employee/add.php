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

<body height="400px">
<script>

</script>
<?php

?>
<div id="content">
  <div id="frame_head">Add Employee Form</div>


    <form method="post" action="">
    <table width="500px" align="center"> 
    <tbody>
    <tr>

      <tr>
        <td><label for="emp_name">
          <p>Employee Name</p>
        </label></td>
        <td><input name="emp_name" type="text" id="emp_name" size="35" placeholder="Employee Name"></td>
      </tr>
      <tr>
        <td><label for="nic">
          <p>NIC No</p>
        </label></td>
        <td><input name="nic" type="text" required id="nic" maxlength="10" placeholder="NIC No"></td>
      </tr>
      <tr>
        <td><label for="emp_email">
          <p>Email</p>
        </label></td>
        <td><input name="emp_email" type="email" id="emp_email" size="35" placeholder="Email Address"></td>
      </tr>
      <tr>
        <td><p>User Name</p></td>
        <td><input name="user_name" type="text" id="user_name" size="35" placeholder="User Name"></td>
      </tr>
      <tr>
        <td><p>
          <label for="user_pw">Password:</label>
        </p></td>
        <td><input name="user_pw" type="password" id="user_pw" size="35" placeholder="Password"></td>
      </tr>
      <tr>
        <td><p>
          <label for="password2">Confirm Password:</label>
        </p></td>
        <td><input name="password2" type="password" id="password2" size="35" placeholder="Confirm Password"></td>
      </tr>
      <tr>
        <td colspan="2"><p>
          <input type="button" name="button" id="button" value="Cancel" onclick="clear()">
          <input type="submit" name="button2" id="button2" value="Save">
        </p></td>
      </tr>
    </tbody>
  </table>
  </form>

 <?php



 require '../dbcon/user.php';
 require '../dbcon/dbcon.php';


    if(isset($_POST['button2'])){
        $emp_name=$_POST['emp_name'];
        $nic=$_POST['nic'];
        $emp_email=$_POST['emp_email'];
        $user_name=$_POST['user_name'];
        $user_pw=$_POST['user_pw'];
        $pw_con=$_POST['password2'];
        if($pw_con!=$user_pw){
            echo '<script language="javascript">';
            echo 'alert("Passwords Do not match ");';  //not showing an alert box.
            echo '</script>';
        }
        else{
            $sql = "INSERT INTO tb_user (`emp_name`,`nic`,`emp_email`,`user_name`,`user_pw`) VALUES ('$emp_name','$nic','$emp_email','$user_name','$user_pw')";
            $res1=mysqli_query($conn,$sql);

        }



    }
    else{

    }



    ?>

</div>
</body>
</html>
