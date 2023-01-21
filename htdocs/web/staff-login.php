
<?php
session_start();

include "db.php";

if(isset($_POST['name']) && isset($_POST['password']))
{
	$staff= $_POST['name'];
	$pass= md5($_POST['password']);

	$sql="SELECT * from staff where staff_id='$staff' and password='$pass'";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['dist'] = $row["district"];
	$_SESSION['name'] = $row["name"];
	$_SESSION['staff_id'] = $row["staff_id"];
	
	echo json_encode($row['Staff_type']);
	}
else{
	$_SESSION['dist'] = '';
	$_SESSION['name'] = '';
	$_SESSION['staff_id'] = '';	
   echo json_encode('Error');

	}

}

?>
   