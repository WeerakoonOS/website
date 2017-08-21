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
    <div id="frame_head">Update Employee Form</div>
    <form method="post" action="update.php">
        <table width="600px" align="center" cellpadding="10">
            <tbody>
            <tr>
                <td><label for="cus_name">
                        Enter the Customer Name          </label>        </td>
                <td><input name="cus_name" type="text" id="cus_name" size="35"></td>
                <td><input type="submit" name="button3" id="button3" value="Search Customer"></td>
            </tr>
            </tbody>
        </table>
    </form>
    <?php
    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';

    if(isset($_POST['button3'])){
        $cus_name=$_POST['cus_name'];

        $sql ="SELECT * FROM tb_cus WHERE cus_name='$cus_name'";
        $result=mysqli_query($conn,$sql);
        if($result!=""){
            while ($row = mysqli_fetch_array($result))
            {
                echo '<form method="post" action="update.php">';
                echo '<table width="600px" align="center" cellpadding="10"><tbody>';
                echo '<tr><td>Cutomer ID</td>';
                echo '<td>';
                echo '<input name="cus_id" type="text" id="cus_id" size="35" value="'.$row['cus_id'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Cutomer Name</td>';
                echo '<td>';
                echo '<input name="cus_name1" type="text" id="cus_name1" size="35" value="'.$row['cus_name'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Cutomer NIC</td>';

                echo '<td>';
                echo '<input name="cus_nic1" type="text" id="cus_nic1" size="35" value="'.$row['cus_nic'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Address 1</td>';
                echo '<td>';
                echo '<input name="add11" type="text" id="add11" size="35" value="'.$row['add1'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Address 2</td>';
                echo '<td>';
                echo '<input name="add21" type="text" id="add21" size="35" value="'.$row['add2'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Address 3</td>';
                echo '<td>';
                echo '<input name="add31" type="text" id="add31" size="35" value="'.$row['add3'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Customer E-mail</td>';
                echo '<td>';
                echo '<input name="cus_email1" type="text" id="cus_email1" size="35" value="'.$row['cus_email'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Customer Contact No</td>';
                echo '<td>';
                echo '<input name="cus_contact1" type="text" id="cus_contact1" size="35" value="'.$row['cus_contact'].'">'  ;
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
        $cus_id=$_POST['cus_id'];
        $cus_name1=$_POST['cus_name1'];
        $cus_nic1=$_POST['cus_nic1'];
        $add11=$_POST['add11'];
        $add21=$_POST['add21'];
        $add31=$_POST['add31'];
        $cus_email1=$_POST['cus_email1'];
        $cus_contact1=$_POST['cus_contact1'];
        $sql = "UPDATE tb_cus SET cus_id ='$cus_id',cus_nic=$cus_nic1,add1='$add11',add2='$add21',add3='$add31',cus_email='$cus_email1',cus_contact='$cus_contact1' WHERE cus_name='$cus_name1'";
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
