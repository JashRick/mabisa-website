
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="images/admin.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<header>
	<label class="logo" id="logo"><img src="images/logo.png"></label>
	<input type="checkbox" id="menu-bar">
	<label class="menu" for="menu-bar"> <i class="fas fa-bars"></i></label>
	<nav class="navbar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Dentist Administration</a>
					<ul>
						<li><a href="#">Admin Log In</a></li>
                        <li><a href="admin_reg.php">Admin Register</a></li>
					</ul>
			</li>
			<li><a href="#">Patient Information</a>
					<ul>
						<li><a href="patient_reg.php">Patient Registration</a></li>
						<li><a href="patient_barcode_loss.html">Patient Barcode Loss</a></li>
					
					</ul>
			</li>
			<li><a href="#">Medical History</a>
				<ul>
                    <li><a href="medical_history.php">Medical History Form</a></li>
                </ul>
			</li>
			<li><a href="#">Reports</a>
				<ul>
                    <li><a href="clinical_exam.php">Clinical Examination</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
			</li>
		</ul>
	</nav>
</header>

<div class="bg1">
  <div class="h1title"><h1>Dentist Administration</h1></div>  
<div class="container">

    <div class="wrapper">
      <div class="title"><span>Admin Log In</span></div>
      <form method="post" action="login.php">
         
        <div class="row">
			
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="admin_username" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="admin_password" required>
        </div>
        <div class="pass"><a href="admin_forgot_pass.html">Forgot password?</a></div>
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