<?php
include "header.php";
//include "adminredirection.php";

?>


      <div class="container">
       <div class="main-agile">
        <style>
             input[type=text],[type=password], select {
             width: 100%;
             padding: 12px 20px;
             margin: 8px 0;
             display: inline-block;
             border: 1px solid #ccc;
             border-radius: 4px;
            box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<?php 
include "db.php";
  
 
  if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$last_name= $_POST['last_name'];
	$staff_id = $_POST['staff_id'];
	$district = $_POST['district'];
  $password = $_POST['password'];
  $type= $_POST['employee'];
  $em= $_POST['email'];

	$sql=" SELECT * from staff where staff_id='$staff_id'";
	$res=mysqli_query($con,$sql);
	if (mysqli_num_rows($res)>0){

		$_SESSION['message']="Already registerd ";
	}else{
  	     $_SESSION['message']="Record has been saved";
			      $_SESSION['msg_type']="success";
              $query1 = "INSERT INTO staff (staff_id, name, last_name, staff_type, district, password) 
      	      VALUES ('$staff_id', '$name', '$last_name', '$type', '$district', '".md5($password)."')";
            $results = mysqli_query($con, $query1) or die(mysqli_error($con));
           $_SESSION["error"] = "";
         header("location:staff.php");
       }
}
  
?>
<body>

<h3><p align="center" style="color:green" ><b>apponment form for staff</b> </p></h3>

<div>
  <form action="#" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="employee name"  required="">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name" placeholder="employee last name"  required="">

    <label for="lname">Employee ID</label>
    <input type="text" id="lname" name="staff_id" placeholder="employee id"  required="">
    <label for="country">Employee Type</label>
    <select id="employee" name="employee">
      <option value="collector">Collector</option>
      <option value="worker">Worker</option>
    </select>

    <label for="lname">Email</label>
    <input type="email"  name="email" placeholder="email id"  required=""> <div></div>
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
    <label for="lname">Password</label>
    <input type="password" id="lnamel" name="password" placeholder="Password" required="">
     <input type="submit" value="Submit" name="save">
     
     <?php
if (isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['message']?>">
<?php
echo $_SESSION['message'];
unset ($_SESSION['message']);
?>
</div>  
<?php endif ?>
     
  </form>
</div>
</div>
</div>

<?php
include "footer.php";
?>
