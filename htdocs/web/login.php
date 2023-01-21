<?php
    include "header.php";
	
    ?>
	<script>
$(document).ready(function(){

	$("#user").submit(function(e) {

			e.preventDefault();
			
			var form = $(this);

			$.ajax({
				type: "POST",
				url: "user-login.php",
				data: form.serialize(),
				success: function(data)
				{
					if(data == 1){
						$("#msg1").empty().append('<span style="color:green;">login sucess</span>');

						setTimeout(function() {
							window.location.href = "user.php";
							}, 1000);

					}else{
						$("#msg1").empty().append('<span style="color:red;">incorrect username or password</span>');
					}
				}
				});


});

});
</script>
<div class="container">
<div class="main-agile">
    <!-- book -->
	<div class="banner-bottom-w3l" id="book"></div>
	<div class="testimonials">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>L</span>ogin
				</h3>
				<div class="tittle-style">
				</div>
			</div>
	<div class="second-contact-agile">
		<div class="col-md-6 form-bg">
			<form action="" method="POST" id="user">
				<div class="contact-fields">
					<input class="form-control" type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="contact-fields">
					<input class="form-control" type="password" name="pass" placeholder="Password" required="">
				</div>	
				<div><input type="submit" id="adlogin" value="Sign In"></div>
				<div id="msg1"></div>
<br>
<p align="right">
<a href="forgot-password/forgot-password.php">Forgot Password</a></p>
	<html>
<body>

<p style="color:#ff0000">Dont have an Account?please sign up.</p>

<p align="right" >


</p>

</body>
	</html>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}</style>
</head>
<body>


<button class="button button1" onclick="myFunction()">sign up</button>


 <script>
  function myFunction() {
    window.location.href="sign-up.php";
  }

</Script>




 
 
			</form>
			<div class="clearfix"></div>
					</div>

			
		<div class="clearfix"> </div>
		</div>
	</div>
    </div>
	<!-- //book -->
</div>
</div>

    <?php
    include "footer.php";
        ?>