<?php

$sql = "SELECT * FROM `tbl_adminreg`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["admin_fullname"] . '<br>';
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);