<?php

#DELETE FROM TABLES
/require

// sql to delete a record



$sql = "DELETE FROM seller_info WHERE username="abc";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


//Update data
$sql = "UPDATE seller_info SET lastname='perera' WHERE username="abc";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




mysqli_close($conn);
?>