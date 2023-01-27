<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="../images/patient.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

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