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
<div class="container">
   
    <div class="wrapper">
      <div class="title"><span>Loss or Forgot Barcode?</span></div>
      <form action="#">
      
        <div class="row">
         
          <input id="barcode_input" type="password" placeholder="Enter patient's name" required>
          
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="Request to Admin">
        </div>
        
      </form>
    </div>
  </div>
 </div>
</body>
</html>