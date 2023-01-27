
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="images/admin.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Dentist Administration</h1></div>  
<div class="container">

    <div class="wrapper">
      <div class="title"><span>Admin Log In</span></div>
      <form method="post" action="api/utils/login.php">
         
        <div class="row">
			
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="admin_username" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="admin_password" required>
        </div>
        <div class="pass"><a href="admin_forgot_pass.php">Forgot password?</a></div>
        <div class="row button">
          <input class="login" type="submit" value="Log In">
        </div>
        <div class="register">Not a member? <a href="admin_reg.php">Register now</a></div>
      </form>
    </div>
  </div>
 </div>
</body>
</html>
