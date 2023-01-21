<?php
//include "header.php";
include "cssf.php";
include "redirect.php";
?>
<?php

$url = 'images/bg2.jpg';

?>

<style type="text/css">
body
{
background-image:url('<?php echo $url ?>');
}
</style>
<?php
include "db.php";
$sql=" SELECT * from user where sl='".$_SESSION['user_id']."' ";
	$res1=mysqli_query($con,$sql) or die(mysqli_error($con));
		if (mysqli_num_rows($res1)>0){
		$row=mysqli_fetch_assoc($res1);
		echo "";
		}else{
			echo "";
		}
		?>
<?php
include "db.php";
if(isset($_POST['send_message'])){
$quality= $_POST['quality'];
$name= $_POST['full_name'];
$email= $_POST['email'];
$comm= $_POST['message'];


$qury= "INSERT INTO feedback (views, name, user_id, comment) values ('$quality', '".$_SESSION['name']."', '".$_SESSION['user_id']."', '$comm')";
$res= mysqli_query($con, $qury) or die(mysqli_error($con)) ;

}

?>

<form class="form-horizontal" style="margin-left:360px;" method="POST" >
<h2>
	Feed Back Form 
</h2>


<label for="full_name" style="font-size:18px; font-family:georgia; margin-top:10px;">What do you think about the quality of our blog?</label>

 
   <p class="quality" required>
   <p style="color:red"> <b>Bad <input type="radio" name="quality" value="bad"> </p>
   <p style="color:sandybrown"> <b>Okay  <input type="radio" name="quality" value="okay"> </p>
   <p style="color:springgreen"> <b>Good <input type="radio" name="quality" value="good"> </p>
  
</p>
</br>

	<p class="full_name">
	<label for="full_name" style="font-size:18px; font-family:georgia; margin-top:10px;" >Your Name</label>
		<input type="text" name="full_name" id="full_name" placeholder="" value="<?php echo $row['name'] ?>" required/>
		
	</p>
		
	<p class="email">
	<label for="email" style="font-size:18px; font-family:georgia; ">Your Email</label>
		<input type="email" name="email" id="email" placeholder="" value="<?php echo $row['email'] ?>" required/>
		
	</p>	
	
	<p class="message">
	<label for="message" style="font-size:18px; font-family:georgia ;">Feedback</label>
		<textarea name="message" placeholder="Enter your feedback . . . ." required></textarea>
		
	</p>
	

<div class="control-group" style="margin-left:-1px;">
	<div class="controls">
		<button type="submit" name="send_message" class="btn btn-success"> Submit</button>
</div>
</div>
	
</form>

