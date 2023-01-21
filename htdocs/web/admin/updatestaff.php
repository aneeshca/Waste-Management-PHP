<?php
include "header.php";
include "nav-bar.php";
include "adminredirection.php";
?>


  
  



<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">staff Profile</h4>
                  <p class="card-category"> the list of f</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">


                  <div class="content">
<div class="container-fluid">

<br>
<div class="text-LEFT" style="color:RED">
         <h1 style="font-size:250%">MY PROFILE </h1>
          
         </div>

 <?php

include "db.php";
    $sl=$_GET['sl'];
     $sql= "SELECT *FROM staff WHERE sl=$sl";
		 $res1=mysqli_query($con,$sql) or die(mysqli_error($con));
	     if(mysqli_num_rows($res1)>0){
			     $row=mysqli_fetch_assoc($res1);               
		 echo 1;
		 }else{
		 echo 0;
	   }
  
 ?>        

<div class="row" >
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body" >


                  <form action="#" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" name="fname" placeholder="" value="<?php echo $row["name"] ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="sname" placeholder=""   value="<?php echo $row["last_name"] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="" value="<?php echo $row["email"] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">District</label>
                          <input type="text" class="form-control" name="dist" placeholder="" value="<?php echo $row["district"] ?>">
                          </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="save" >Update Profile</button>
                     <div class="clearfix"></div>
                
<?php
  include "db.php";
if(isset($_POST['save']))
{
  mysqli_query($con,"UPDATE staff SET name='$_POST[fname]',last_name='$_POST[sname]',email='$_POST[email]',district='$_POST[dist]'and sl=$sl ");?>
  <script>
 <a href="/staff.php"></a>
  </script>
  <?php
}
else{
  echo "";
}
?>
  
    </div>
                </div>
              </div>
          </div>
          </div>
        </div>
</div>

  <?php
include "footer.php"
?>
</div>