<?php
include "header.php";
//include "adminredirection.php";
?>

<div class="wrapper ">    
<?php
include "nav-bar.php";
?>  
 <div class="content">
<div class="container-fluid">


<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Booking details of customers</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
<?php
include "db.php";

$sql="SELECT * FROM user,userb WHERE userb.status!='cancelled' and userb.user_id=user.sl order by date desc ";
$result= mysqli_query($con, $sql);


?>

        <th>Name</th>
          <th>PHONE NUMBER</th>
            <th>PINCODE</th>
             <th>DISTRICT</th>
               <th>ADDRESS</th>
               <th>DATE</th>
               <th>COLLECTED STAFF</th>
                 <th>STATUS</th>
                   <th>OPERATION</th>
                     </thead>
                       <tbody>
                      
                          <?php
                               while($row= mysqli_fetch_array($result))
                         
                           {
                           ?>
                           <tr >
                        
                           <td><?php echo $row['name'] ?></td>
                           <td><?php echo $row['phone'] ?></td>
                           <td><?php echo $row['pinnumber'] ?></td>
                           <td><?php echo $row['district'] ?></td>
                           <td><?php echo $row['address'] ?></td>
                           <td><?php echo $row['date'] ?></td>
                           <td><?php echo $row['staff_id'] ?></td>
                           <td><?php echo $row['status'] ?></td>
                           <td>
                           <a href="update.php?user_id=<?php echo $row['user_id'] ?>&&order_id=<?php echo $row['order_id'] ?>"> <button type="button" class="btn btn-primary" ><?php echo $row['status'] ?></button></a> </td>
                           
                          
                        
                        
                          </tr>
                          <?php
                          
                        }
                         ?>
                       
                    
                      </tbody>
                    </table>
                  </div>
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