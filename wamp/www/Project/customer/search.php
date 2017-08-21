<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/iframe.css" rel="stylesheet" type="text/css">
<style type="text/css">
#content table {
	margin-top: 30px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 15px;
}
}
tbody tr td {
	text-align: right;
	font-family: "Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", "Verdana", "sans-serif";
	font-size: 15px;
}
tr td #select {
	width: 200px;
	text-align: center;
}
tr td #button {
	margin-top: 21px;
}
</style>
</head>

<body>
<div id="content">
  <div id="frame_head">Search Customer</div>
    <form method="post" action="search.php">


    <table width="600" align="center" cellpadding="10">
    <tbody>
      <tr><td><label for="cus_name">
                  <p>Enter the Customer Name</p>
              </label></td>
          <td><input name="cus_name" type="text" id="cus_name" size="35"></td>
        <td width="120"><input type="submit" name="search" id="search" value="Search Customer"></td>
      </tr>


    </form>
      <?php
      require '../dbcon/user.php';
      require '../dbcon/dbcon.php';
      if(isset($_POST['search'])){
          $cus_name=$_POST['cus_name'];
          $sql ="SELECT * FROM tb_cus WHERE cus_name='$cus_name'";
          $result=mysqli_query($conn,$sql);
          if($result!=""){
              while ($row = mysqli_fetch_array($result))
              {
                  require 'aa.php';

              }
          }
          elseif(mysqli_fetch_array($result)===''){
              echo '<script language="javascript">';
              echo 'alert("Passwords Do not match ");';  //not showing an alert box.
              echo '</script>';
          }

      }



      ?>



    </tbody>
  </table>

</div>
<span style="font-size: 36px"></span>
</body>
</html>
