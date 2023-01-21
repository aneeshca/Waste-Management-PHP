<?php
	session_start();
	include "db.php";
	
	if(isset($_POST['Email']) && isset($_POST['pass']))
	{
		
		$name=$_POST['Email'];
		$pass=md5($_POST['pass']);
	
		$sql="SELECT * from user where email='$name' and password='$pass'";
		$res1=mysqli_query($con,$sql) or die(mysqli_error($con));
	
		if(mysqli_num_rows($res1)==1){
			$row=mysqli_fetch_assoc($res1);
			$_SESSION['user_id'] = $row["sl"];
			$_SESSION['name'] = $row["name"];
		
			
            echo 1;
		}else{
			$_SESSION['user_id'] = '';
			$_SESSION['name'] = '';
			
			
			echo 0;
	
		}
	
	}
	?>

