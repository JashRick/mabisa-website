<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="images/patient.png" type="image/x-icon">
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
			<li><a class="active" href="index.php">Home</a></li>
			<li><a class="active"href="#">Dentist Administration</a>
					<ul>
						<li><a href="admin_login.php">Admin Log In</a></li>
                        <li><a href="admin_reg.php">Admin Register</a></li>
					</ul>
			</li>
			<li><a href="#">Patient Information</a>
					<ul>
						<li><a href="patient_reg.php">Patient Registration</a></li>
                        <li><a href="patient_barcode_loss.php">Patient Barcode Loss</a></li>
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
  <div class="h1title"><h1>Patient Information</h1></div>  
<div class="container1">
		<div class="wrapper1" id="wrapper1">
		  <div class="title"><span>Patient Registration</span></div>
          <form action="api/utils/connection.php" method="GET">
            <div class="main-user-info">
               <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Enter Patient Id" required/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text"id="fullName" name="last_name" placeholder="Last Name" required/>
                <input type="text"id="fullName" name="first_name" placeholder="First Name" required/>
                <input type="text"id="fullName" name="MI" placeholder="M.I." required/>
              </div>
              <div class="user-input-box">
                <label for="age">Age</label>
                <input type="text"id="age" name="age" placeholder="Enter Age" required/>
              </div>
              <div class="user-input-box">
                <label for="birthday">Birthday</label>
                <input type="date"id="birthday" name="birthday" placeholder="Select Birthday" required/>
              </div>
              <div class="user-input-box">
                <label for="gender">Gender</label>
                <select>
                    <option >Male</option>
                    <option >Female</option>
                </select>
              </div>
              <div class="user-input-box">
                <label for="address">Address</label>
                <input type="text"id="address" name="address" placeholder="Enter Address" required/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Occupation</label>
                <input type="text"id="occupation" name="occupation" placeholder="Enter Occupation" required/>
              </div>
              <div class="user-input-box">
                <label for="contact">Contact</label>
                <input type="text"id="contact" name="contact" placeholder="Enter Contact" required/>
              </div>
              <div class="user-input-box">
                <label for="weight">Weight</label>
                <input type="text"id="weight" name="weight" placeholder="Enter Weight" required/>
              </div>
              <div class="user-input-box">
                <label for="height">Height</label>
                <input type="text"id="height" name="height" placeholder="Enter Height" required/>
              </div>



            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Register">
            </div>
          </form>
		</div>
	  </div>
   
  </div>
 </div>
</body>
</html>