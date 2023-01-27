<?php

include("./utils/connection.php");

$sql = "SELECT * tbl_adminreg";

$result = mysqli_query($con, $sql);
   if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "admin_fullname: " . $row["admin_fullname"];
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);