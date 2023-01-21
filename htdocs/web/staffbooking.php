<?php
include "header.php";
include "staffredirect.php";
?>

			
<div class="agile-top">
			<div class="col-xs-4 logo">

			
			<!-- navigation -->
		
			<!-- //navigation -->
		</div>
		</div>
  
<div class="content">
  <div class="container-fluid">
    <div class="content">
      <div class="container-fluid">
      <div class="col-xs-2 menu">
				<a href="" id="menuToggle">
					<span class="navClosed"></span>
				</a>
				<nav>
					<a href="index.php">Home</a>
					<!-- <a href="#about" class="scroll">About Us</a>
					<a href="#services" class="scroll">Our Aim</a> -->
                    <a href="login.php">User LogIn</a>
				
				</nav>
			</div>
         <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title " align="center">BOOKING DEATILS OF CUSTOMERS</h3>
                   <div class="alert alert-warning" role="alert">  <p class="card-category"><strong>ALERT!</strong> THE BOOKING DEATILS OF CUSTOMER WILL DISAPPERS WHEN OPERATION COLLECTED </p> </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                   
              <?php
          include "db.php";
       $sql="SELECT  * FROM user,userb WHERE userb.status='pending' and user.district='".$_SESSION['dist']."' " ;
    $result= mysqli_query($con,$sql) or die(mysqli_error($con));
 

?>

<form >
  <table class="table">
    <thead class=" text-primary">
     <th> NAME</th>
        <th>PHONE NUMBER</th>
           <th>PINCODE</th>
             <th>DISTRICT</th>
               <th>ADDRESS</th>
                  <th>OPERATION</TH>
                     </thead>
                       <tbody>
                        <?php
                        while($row =mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . " " . $row['sname'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['pinnumber'] . "</td>";
                        echo "<td>" . $row['district'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                       
                        ?>

                        <?php
                        echo "<td>" ?>
                        <a href="update.php?user_id=<?php echo $row['user_id'] ?>&&order_id=<?php echo $row['order_id'] ?>&&staff_id=<?php echo $_SESSION['staff_id'] ?>"> <button type="button" name="okey" class="btn btn-primary btn-sm" ><?php echo $row['status'] ?></button></a> <?php echo "</td>";
                        echo "</tr>";
                        
                        } 
                       ?>
                      </tbody>
                    </table>
                   </form>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>                  
      </div>
    </div>
    <div>
    <?php
     $_SESSION['staff_id'] ?>
    </div>