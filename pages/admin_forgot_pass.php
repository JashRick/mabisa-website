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
   
    <div class="wrapper">
      <div class="title"><span>Forgot Password</span></div>
      <form action="#">
        <div class="row">
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="Enter email address" required>
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="Send">
        </div>
        <div class="register">Back to <a href="admin_login.php">Log In</a></div>
      </form>
    </div>
  </div>
 </div>
</body>
</html>