	<?php
    include "header.php";
	include "redirect.php";
	?>

    	
<div class="container">
<div class="main-agile">

			<div class="title-div">
				<h3 class="tittle">
					<span>B</span>ook Now
				</h3>
				<div class="tittle-style">
				</div>
			</div>
<div class="second-contact-agile">
		<div class="col-md-6 form-bg">

	
		
		<?php
	include "db.php";
	 $sqli= "SELECT *FROM user WHERE sl='".$_SESSION['user_id']."'";
	 $res3=mysqli_query($con, $sqli) or die(mysqli_error($con));
	 if(mysqli_num_rows($res3)>0){
			 $row=mysqli_fetch_assoc($res3);               
	 echo "";
	 }else{
	 echo "";
   }
	?>

<?php 
include "db.php";
  
 
  if (isset($_POST['save'])) {
	
  	
	$name = $_POST['fname'];
	$phone = $_POST['phone'];
	$district = $_POST['district'];
	$pinnumber = $_POST['pinnumber'];
	$address = $_POST['address'];
	$sql=" SELECT * from userb where status='pending' and user_id='".$_SESSION['user_id']."' ";
	$res=mysqli_query($con,$sql);
	if (mysqli_num_rows($res)>0){

		$_SESSION['message']="alredy booked ";
	}else{
  	     $_SESSION['message']="Record has been saved";
			 $_SESSION['msg_type']="success";

           $query1 = "INSERT INTO userb (user_id, status)  VALUES ('".$_SESSION['user_id']."', 'Pending')";
		   //$query2= "INSERT INTO address ( user_id, adname, adphone, pincode, adaddress, addistrict) values ('".$_SESSION['user_id']."', '$name', '".$row["phone"]."', '$pinnumber', '$address','".$row["district"]."')";
           $results = mysqli_query($con, $query1) or die(mysqli_errno($con));
		   //$results2 = mysqli_query($con, $query2) or die(mysqli_errno($con));

           $_SESSION["error"] = "";
           header("location:booking-status.php");
		

            
          
		 $email= $row['email'];
		 $subject = "myran book";
		 $message = "Your password reset code is oombii";
		   $sender = "From: wastemanagementstate@gmail.com";
		if(mail($email, $subject, $message, $sender)){
		  $info = "Thank you for booking ,our staff will collect your waste soon - $email";
			   $_SESSION['info'] = $info;
			   $_SESSION['email'] = $email;
			   header('');
			   exit();
		  
	   }else{
		  $errors['db-error'] = "Something went wrong!";
	   }
   



}
  }
  
?>
			<form action="#" method="post">
				<div class="contact-fields"  >
					<input type="text" name="fname" placeholder=""  value="<?php echo $row['name'] ?> <?php echo $row['sname'] ?>"  readonly="readonly">
				</div>
				<div class="contact-fields">
					<input type="text" name="phone" placeholder="" value="<?php echo $row['phone'] ?>"readonly="readonly">
				</div>
				<div class="contact-fields">
					<input type="text" name="district" placeholder="" value="<?php echo $row["district"] ?>" readonly="readonly">
				</div>	
				<div class="contact-fields">
					<input type="text" name="pinnumber" placeholder="" value="<?php echo $row["pinnumber"] ?>" readonly="readonly">
				</div>	
				<div class="contact-fields">
					<textarea name="address" placeholder="" readonly="readonly" ><?php echo $row["address"] ?></textarea>
				</div>
				<div><h4 style="color:blue">if you want to edit your profile,<h4 style="color:green">Click on edit</h4></h4></div>
			<a href="userprofile.php">	<button name="button" class="btn btn-primary" type="button" align="right">edit</button></a>
				<div>
				<input type="submit" name="save" value="Submit">
				</div>
			
				<?php
if (isset($_SESSION['message'])):?>
<dvi>
<div class="alert alert-danger <?=$_SESSION['message']?>">
<?php

echo $_SESSION['message'];
//unset ($_SESSION['message']);

?>
</div>

</div>  
<?php endif ?>
			</form>	

				
	

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