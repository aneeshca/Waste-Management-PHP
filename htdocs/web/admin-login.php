<?php
session_start();

include "db.php";

if(isset($_POST['Name']) && isset($_POST['password']))
{
	$name=$_POST['Name'];
	$pass=$_POST['password'];

	$sql="select * from admin where name='$name' and password='$pass'";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));

	if(mysqli_num_rows($res)==1){
		$row=mysqli_fetch_assoc($res);
		echo'success';
        $_SESSION['nm']= $row["name"];

	}else{
		echo"error";
		$_SESSION['nm']='';
	}

}

?>
