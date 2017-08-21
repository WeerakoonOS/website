<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../../css/iframe.css" rel="stylesheet" type="text/css">
<style type="text/css">
#content table {
	margin-top: 30px;
	font-size: 15px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
td p #button  , td p #button2, td p #button3{
	padding-right: 10px;
	padding-left: 10px;
	margin-right: 70px;
}
tr {
	text-align: right;
}
table tr td table {
	background-color: #FDFDFD;
	border: thin solid #000000;
}
</style>
</head>

<body>
<div id="content">
  <div id="frame_head">Retail Return</div>

  <table width="730" cellpadding="10">
    <tbody>
    <?php
    require '../../dbcon/user.php';
    require '../../dbcon/dbcon.php';
    if(isset($_POST['chkbtn'])){
        $item_id=$_POST['serial_no'];
        $sql ="SELECT * FROM tb_item WHERE item_id='$item_id'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==0) {
            phpAlert("Item Not found");
        }
        elseif($result!=""){
            $row = mysqli_fetch_array($result);
            $item_name=$row['item_name'];
        }
    }
    ?>

    <?php     //alert message
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    ?>

      <tr>
          <form action="retail.php" method="post">
          <td>Item No</td>
          <td><input type="number" name="serial_no" id="number" value="<?php echo (isset($item_id))?$item_id:'';?>"></td>
          <td><input type="submit" name="chkbtn" id="chkbtn" value="   Check   "></td>

      </tr>
      <tr>
        <td>Item Name</td>
        <td><input type="text" name="textfield" id="textfield" value="<?php echo (isset($item_name))?$item_name:'';?>"></td>
        <td><label for="number">Qty</label></td>
        <td><input type="number" name="number" id="number"></td>
        <td><input type="submit" name="add" id="button" value="   Add   "></td>
        </form>
      </tr>

      <?php
          require '../../dbcon/user.php';
          require '../../dbcon/dbcon.php';


          if(isset($_POST['button'])){
              $item_id=$_POST['serial_no'];
              $qty=$_POST['number'];

              $sql ="SELECT * FROM tb_item WHERE item_id='$item_id'";
              $result=mysqli_query($conn,$sql);
              $row = mysqli_fetch_array($result);
              $qua_stock=$row['qua_stock'];
              $rent_price=$row['rent_price'];




          }
      ?>

      <tr>
        <td colspan="4"><table width="600" cellpadding="10">
          <tbody>
            <tr>
              <td width="210" style="text-align: center">Item Name</td>
              <td width="61" style="text-align: center">Qty</td>

            </tr>

            <?php
          require '../../dbcon/user.php';
          require '../../dbcon/dbcon.php';



          if(isset($_POST['add'])){
              $item_id=$_POST['serial_no'];
              $qty=$_POST['number'];

              $sql ="SELECT * FROM tb_item WHERE item_id='$item_id'";
              $result=mysqli_query($conn,$sql);
              $row = mysqli_fetch_array($result);
              $qua_stock=$row['qua_stock'];
              $rent_price=$row['rent_price'];
              $total = $rent_price * $qty;
              echo "<tr>";
              echo "<td align='center'>" . $row['item_name'] . "</td>";
              echo "<td align='center'>" . $qty . "</td>";


              echo "</tr>";


              $sql ="INSERT into tb_retail_rt (item_id,qty) VALUES ($item_id,$qty)";
              mysqli_query($conn,$sql);

                }


            ?>

            <tr>
              <td></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>

            </tr>
          </tbody>
        </table></td>
          <form method="post" action="retail.php">
        <td><input type="submit" name="button2" id="button2" value=" Remove "></td>
          </form>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
          <form action="retail.php" method="post">
        <td><input type="submit" name="button4" id="button4" value=" Cancel "></td>
        <td><input type="submit" name="button3" id="button3" value=" Save "></td>
          </form>
        <td>&nbsp;</td>
          <?php
          if(isset($_POST['button3'])){
              phpAlert("Return added to database");
          }
          elseif (isset($_POST['button2'])){
              $sql="delete from tb_retail order by inv_id desc limit 1";
              mysqli_query($conn,$sql);
              phpAlert("Return Cancelled");

          }
          elseif (isset($_POST['button4'])){
              $sql="delete from tb_retail order by inv_id desc limit 1";
              mysqli_query($conn,$sql);
              phpAlert("Return Cancelled");
          }
          ?>
      </tr>

    </tbody>
  </table>
</div>
</body>
</html>
