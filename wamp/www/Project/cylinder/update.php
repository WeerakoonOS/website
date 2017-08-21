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
td p #button {
	margin-right: 150px;
}
td p #button , td p #button2{
	padding-right: 10px;
	padding-left: 10px;
	margin-right: 150px;
}
tr {
	text-align: right;
}
</style>
</head>

<body>
<div id="content">
  <div id="frame_head">Update Item Form</div>
    <form method="post" action="update.php">
        <table width="600px" align="center" cellpadding="10">
            <tbody>
            <tr>
                <td><label for="item_name">
                        Enter the Item Name         </label>        </td>
                <td><input name="item_name" type="text" id="item_name" size="35"></td>
                <td><input type="submit" name="button3" id="button3" value="Search Item"></td>
            </tr>
            </tbody>
        </table>
    </form>
    <?php
    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';

    if(isset($_POST['button3'])){
        $item_name=$_POST['item_name'];

        $sql ="SELECT * FROM tb_item WHERE item_name='$item_name'";
        $result=mysqli_query($conn,$sql);
        if($result!=""){
            while ($row = mysqli_fetch_array($result))
            {
                echo '<form method="post" action="update.php">';
                echo '<table width="600px" align="center" cellpadding="10"><tbody>';
                echo '<tr><td>Item ID</td>';
                echo '<td>';
                echo '<input name="item_id1" type="text" id="item_id1" size="35" value="'.$row['item_id'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Item Name</td>';
                echo '<td>';
                echo '<input name="item_name" type="text" id="item_name" size="35" value="'.$row['item_name'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Item Cost</td>';

                echo '<td>';
                echo '<input name="item_cost1" type="text" id="item_cost1" size="35" value="'.$row['item_cost'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Whole Sale Price</td>';
                echo '<td>';
                echo '<input name="who_price1" type="text" id="who_price1" size="35" value="'.$row['who_price'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Rental Price</td>';
                echo '<td>';
                echo '<input name="rent_price1" type="text" id="rent_price1" size="35" value="'.$row['rent_price'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Quantity Available</td>';
                echo '<td>';
                echo '<input name="qua_stock1" type="text" id="qua_stock1" size="35" value="'.$row['qua_stock'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Reorder Level</td>';
                echo '<td>';
                echo '<input name="reor_lev1" type="text" id="reor_lev1" size="35" value="'.$row['or_lev'].'">'  ;
                echo '</td>';
                echo "</tr>";


            }
        }
        elseif(mysqli_fetch_array($result)===''){
            echo '<script language="javascript">';
            echo 'alert("Passwords Do not match ");';  //not showing an alert box.
            echo '</script>';
        }

    }

    echo '
    <tr>
        <td colspan="2"><p>
          <input type="submit" name="button2" id="button2" value="Update">
          
        </p></td>
      </tr>
    </tbody>
    
  </table></form>';


    if(isset($_POST['button2'])){
        $item_name=$_POST['item_name'];
        $item_id1=$_POST['item_id1'];

        $item_cost1=$_POST['item_cost1'];
        $who_price1=$_POST['who_price1'];
        $rent_price1=$_POST['rent_price1'];
        $qua_price1=$_POST['qua_stock1'];
        $reor_lev1=$_POST['reor_lev1'];

        $sql = "UPDATE tb_item SET item_id ='$item_id1',item_cost='$item_cost1',who_price='$who_price1',rent_price='$rent_price1',qua_stock='$qua_price1',or_lev='$reor_lev1' WHERE item_name='$item_name'";
        //echo $sql;
        $res1=mysqli_query($conn,$sql);
        phpAlert("Information Updated");

    }
    ?>

    <?php     //alert message
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    ?>
    </tbody>
    </table>

</div>
</body>
</html>
