<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="../images/admin.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Dentist Administration</h1></div>  
<div class="container">
		<div class="wrapper" id="wrapper1">
		  <div class="title"><span>Admin Registration</span></div>
		  <form action="../api/utils/connection.php" method="GET">
				<div class="row">
					<i class="fas fa-user-tie"></i>
					<input type="text" placeholder="Full Name" name="fullname" required>
					</div>
				<div class="row">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="Username" name="username" required>
				</div>
				<div class="row">
					<i class="fas fa-envelope"></i>
					<input type="email" placeholder="Email" name="email" required>
				</div>
				<div class="row">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="password" required>
				</div>
				<div class="row">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Re-type Password" name="repassword" required>
				</div>
					<div class="row button">
					<input class="login" type="submit" value="Register">
				</div>
			
		  </form>
		</div>
	  </div>
   
  </div>
 </div>
</body>
</html>

<?php

if (isset($_GET["status"])) {
	if ($_GET["status"] == 'success') {
		echo '<script type="text/javascript">'; 
		echo 'Swal.fire("Dentist", "Registration Succesfully!", "success"); '; 
		echo '</script>';
	}
}

?>