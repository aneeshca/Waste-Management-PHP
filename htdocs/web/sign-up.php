
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"> -->
<title>green kerala</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/style.css">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

</head>
<body>
<div class="container">
<div class="row">
<div class="signup-form">   
    <form action="register.php" method="post" enctype="multipart/form-data"><br><br>
		<h1 class="text-center text-success">Register</h1>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="col"><input type="text" class="form-control" name="fname" placeholder=" first Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="sname" placeholder="Last name" required="required">
        </div>
		<div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">
        </div>
		<div class="form-group">
            <textarea type="text" class="form-control" name="address" placeholder="address" ></textarea>
            <div class="form-group">
            </div>
        	<input type="text" class="form-control" name="pinnumber" placeholder="Pincode" required="required">
        </div>
		<div class="form-group">
            <!--<input type="text" class="form-control" name="district" placeholder="district" required="required"> -->
            <label for="country">District</label>
    <select id="district" name="district">
      <option value="Thivandram">thivandram</option>
      <option value="Kollam">kollam</option>
      <option value="Pathanamthitta">pathanamthitta</option>
      <option value="Alapuzha">alapuzha</option>
      <option value="Kottayam">kottayam</option>
      <option value="Idukki">idukki</option>
      <option value="ernakulam">Ernakulam</option>
      <option value="Thrissur">Thrissur</option>
      <option value="palakkad">palakkad</option>
      <option value="malappurama">malappuram</option>
      <option value="kozhikkod">kozhikkod</option>
      <option value="wayanad">wayanad</option>
      <option value="kannur">kannur</option>
      <option value="kazaragod">kazaragod</option>
    </select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm" placeholder="confirm password" required="required">
        </div>
        </div>
		
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
       
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
        
        <?php   
        if($_SESSION["error"]!=""){
            echo"<div class='alert alert-danger' role='alert' align='center'>  $_SESSION[error]   </div>";
            
        }

        $_SESSION["error"]="";
        ?> 
       
    </form>
	
</div>
</div>
</div>
</body>
</html>