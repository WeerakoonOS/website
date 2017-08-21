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
td p #button  , td p #button2, td p #button3{
	padding-right: 10px;
	padding-left: 10px;
	margin-right: 70px;
}
tr {
	text-align: right;
}
</style>
</head>

<body>
<div id="content">
  <div id="frame_head">Add Cylinder Form</div>

    <form method="post" action="">
        <table width="500px" align="center">
            <tbody>

            <tr>
                <td><label for="item_name">
                        <p>Item Name</p>
                    </label></td>
                <td><input name="item_name" type="text" id="item_name" size="35" placeholder="Item Name"></td>
            </tr>
            <tr>
                <td><label for="item_cost">
                        <p>Item Cost</p>
                    </label></td>
                <td><input name="item_cost" type="text" required id=item_cost" maxlength="5" placeholder="Cost of the Item"></td>
            </tr>
            <tr>
                <td><label for="who_price">
                        <p>Wholeshale Price</p>
                    </label></td>
                <td><input name="who_price" type="text" id="who_price" size="5" placeholder="Wholeshale Price"></td>
            </tr>
            <tr>
                <td><p>Rental Price</p></td>
                <td><input name="rent_price" type="text" id="rent_price" size="5" placeholder="Rental Price"></td>
            </tr>
            <tr>
                <td><p>
                        <label for="qua_stock">Stock Quantity:</label>
                    </p></td>
                <td><input name="qua_stock" type="text" id="qua_stock" size="5" placeholder="Rental Price"></td>
            </tr>
            <tr>
                <td><p>
                        <label for="re_lev">Reorder-Level:</label>
                    </p></td>
                <td><input name="re_lev" type="text" id="re_lev" size="5" placeholder="Reorder Level"></td>
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

        $item_name=$_POST['item_name'];
        $item_cost=$_POST['item_cost'];
        $who_price=$_POST['who_price'];
        $rent_price=$_POST['rent_price'];
        $qua_stock=$_POST['qua_stock'];
        $re_lev=$_POST['re_lev'];
        $sql = "INSERT INTO tb_item (`item_name`,`item_cost`,`who_price`,`rent_price`,`qua_stock`,`or_lev`) VALUES ('$item_name','$item_cost','$who_price','$rent_price','$qua_stock','$re_lev')";
        $res1=mysqli_query($conn,$sql);


    }
    else{

    }



    ?>
</div>
</body>
</html>
