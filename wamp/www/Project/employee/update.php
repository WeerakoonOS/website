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
                <td><label for="emp_name">
                        Enter the Employee Name          </label>        </td>
                <td><input name="emp_name" type="text" id="emp_name" size="35"></td>
                <td><input type="submit" name="button3" id="button3" value="Search Employee"></td>
            </tr>
            </tbody>
        </table>
    </form>
    <?php
    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';

    if(isset($_POST['button3'])){
        $emp_name=$_POST['emp_name'];

        $sql ="SELECT * FROM tb_emp WHERE emp_name='$emp_name'";
        $result=mysqli_query($conn,$sql);
        if($result!=""){
            while ($row = mysqli_fetch_array($result))
            {
                echo '<form method="post" action="update.php">';
                echo '<table width="600px" align="center" cellpadding="10"><tbody>';
                echo '<tr><td>Employee ID</td>';
                echo '<td>';
                echo '<input name="emp_id" type="text" id="emp_id" size="35" value="'.$row['emp_id'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Employee Name</td>';
                echo '<td>';
                echo '<input name="emp_name1" type="text" id="emp_name1" size="35" value="'.$row['emp_name'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Employee NIC</td>';

                echo '<td>';
                echo '<input name="nic1" type="text" id="nic1" size="35" value="'.$row['nic'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Employee E-mail</td>';
                echo '<td>';
                echo '<input name="emp_email1" type="email" id="emp_email1" size="35" value="'.$row['emp_email'].'">'  ;

                echo '</td>';
                echo "</tr>";
                echo '<tr><td>User Name</td>';
                echo '<td>';
                echo '<input name="user_name1" type="text" id="user_name1" size="35" value="'.$row['user_name'].'">'  ;
                $old_pw=$row['user_pw'];
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Employee Password</td>';
                echo '<td>';
                echo '<input name="user_pw1" type="text" id="user_pw1" size="35" >'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Type Password</td>';
                echo '<td>';
                echo '<input name="type_pw1" type="text" id="type_pw1" size="35" >'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Type Password1</td>';
                echo '<td>';
                echo '<input name="type_pw2" type="text" id="type_pw2" size="35" >'  ;
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

        $emp_id=$_POST['emp_id'];
        $emp_name1=$_POST['emp_name1'];

        $nic1=$_POST['nic1'];
        $emp_email1=$_POST['emp_email1'];
        $user_name1=$_POST['user_name1'];
        $user_pw1=$_POST['user_pw1'];
        $type_pw1=$_POST['type_pw1'];
        $type_pw2=$_POST['type_pw2'];
        $sql1 ="SELECT * FROM tb_emp WHERE emp_name='$emp_name1'";
        $result1=mysqli_query($conn,$sql1);
        $row = $result1->fetch_assoc();

        if(($user_pw1==$row['user_pw']) &&($type_pw1==$type_pw2)  ){
            $sql = "UPDATE tb_emp SET emp_id ='$emp_id',nic='$nic1',emp_email='$emp_email1',user_name='$user_name1',user_pw='$type_pw1' WHERE emp_name='$emp_name1'";
            //echo $sql;
            $res1=mysqli_query($conn,$sql);
            phpAlert("Information Updated");
        }
        else{
            phpAlert("Incoreect Pw");
        }



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
