<?php

$fname = $_GET['fullname'];
$username = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];

$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "id20189319_db_mabisa";



$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con)
{
	die("Error : ".mysqli_connect_error());
}

if ($pass == $repass)
{
   $sql = "INSERT INTO `tbl_adminreg`(`admin_fullname`, `admin_username`, `admin_email`, `admin_password`, `admin_repassword`) VALUES ('$fname', '$username', '$email', '$pass', '$repass')";
   if(mysqli_query($con,$sql))
   {
      echo "asdasd";
      header("location: ../../pages/admin_reg.php?status=success");
      // echo '<script type="text/javascript">'; 
      // echo 'window.location = "admin_reg.php";';
      // echo 'Swal.fire("Dentist", "Registration Succesfully!", "success"); '; 
      // echo '</script>';
   }
    else
   {
      
       echo '<script type="text/javascript">'; 
echo 'alert("Something went wrong."); '; 
echo 'window.location = "admin_reg.php";';
echo '</script>';
   }
} else
{
    
    echo '<script type="text/javascript">'; 
echo 'alert("Password not matched."); '; 
echo 'window.location = "admin_reg.php";';
echo '</script>';
}

mysqli_close($con);