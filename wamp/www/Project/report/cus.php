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
        table tr td table {
            background-color: #FDFDFD;
            border: thin solid #000000;
        }
    </style>
</head>

<body>
<div id="content">
    <div id="frame_head">Inventory Report</div>


    <table width="600px" align="center" cellpadding="10">
        <tr><th><td><b> Item</b></td> <td><b> Item Name</b></td> <td><b> Item Cost</b></td> <td><b>Item Quantity</b></td></th></tr>
    <?php



    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';


    $sql ="SELECT * FROM tb_item ";
    $result=mysqli_query($conn,$sql);
    foreach ($result as $row){

        echo '<tr><td>';
        echo '<tr><td>';
        echo '.';
        echo '</td>';
        echo '<td>';
        echo $row['item_id'];
        echo '</td>';
        echo '<td>';
        echo $row['item_name'];
        echo '</td>';
        echo '<td>';
        echo $row['item_cost'];
        echo '</td>';
        echo '<td>';
        echo $row['qua_stock'];
        echo '</td>';


    }


    ?>

</div>
</body>
</html>
