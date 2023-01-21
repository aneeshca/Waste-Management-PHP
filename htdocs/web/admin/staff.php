<?php
include "header.php";
include "nav-bar.php";
//include "adminredirection.php";
?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  



<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">staff details</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
<?php
include "db.php";
$sql="SELECT * FROM staff ";
$result= mysqli_query($con, $sql);

?>
 <th>STAFF ID</th>
 <th> Name</th>
   <th> Staff Type</th>
                <th>email</th>
           <th>allocated district</th>
           <th>update profile</th>
           <th>remove staff</th>
        
                     </thead>
                       <tbody>
                        <?php
                        while($row= mysqli_fetch_array($result))
                        {
                         ?>
                         <tr id=<?php echo $row['sl'] ?>>
                         <td><?php echo $row['staff_id'] ?></td>
                         <td><?php echo $row['Staff_type'] ?></td>
                         <td><?php echo $row['name'] ?></td>
                         <td><?php echo $row['email'] ?></td>
                         <td><?php echo $row['district'] ?></td>
                         
                        <td> <a href="updatestaff.php?sl=<?php echo $row['sl'] ?>"> <button type="button" class="btn btn-primary btn-sm" >Update</button></a></td>
                    
                       <?php echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='remove_staff.php?id=".$row['sl']."'><b>delete</b></a></td>"?>
                      
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



</html>
    </div>
  <?php
include "footer.php"
?>
</div>
