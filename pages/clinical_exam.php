<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="images/evaluation.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Reports</h1></div>  
<div class="container1">
		<div class="wrapper1" id="wrapper1">
		  <div class="title"><span>Clinical Examination</span></div>
          <form action="#">
            <div class="main-user-info">
              <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Enter Patient Id" required/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text"id="fullName" name="fullName" placeholder="Last Name" required/>
                <input type="text"id="fullName" name="fullName" placeholder="First Name" required/>
                <input type="text"id="fullName" name="fullName" placeholder="M.I." required/>
              </div>
              <div class="user-input-box">
                <label for="age">Face and Lips</label>
                <input type="text"id="age" name="age" required/>
              </div>
              <div class="user-input-box">
                <label for="address">Cheeks</label>
                <input type="text"id="address" name="address"  required/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Tongue</label>
                <input type="text"id="occupation" name="occupation"  required/>
              </div>
              <div class="user-input-box">
                <label for="contact">Palate</label>
                <input type="text"id="contact" name="contact"  required/>
              </div>
              <div class="user-input-box">
                <label for="weight">Oropharynx</label>
                <input type="text"id="weight" name="weight"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Gingivae Spongy</label>
                <input type="text"id="height" name="height"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Missing Teeth</label>
                <input type="text"id="height" name="height"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Retracted</label>
                <input type="text"id="height" name="height"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Bleeding</label>
                <input type="text"id="height" name="height"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Malocclusion</label>
                <input type="text"id="height" name="height"  required/>
              </div>



            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Submit">
            </div>
          </form>
		</div>
	  </div>
   
  </div>
 </div>
</body>
</html>