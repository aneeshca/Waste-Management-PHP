<?php
include "header.php";
include "nav-bar.php";
//include "adminredirection.php";
?>



 

<div class="content">
        <div class="container-fluid">

        <?php

include "db.php";

$sql = "SELECT  SUM(ewaste),SUM(plastic),SUM(metal) from collection";
$result =mysqli_query($con, $sql) or die (mysqli_errno($con));
while($row = mysqli_fetch_array($result)){
  echo "<u><h3 style=color:red>the total count of the waste</h3></u>";
 
    echo "<b> Total electronic waste:". $row['SUM(ewaste)'];
    echo "<br>";
    echo " Total plastic waste      : ". $row['SUM(plastic)'];
    echo "<br>";
    echo " Total metal waste        : ". $row['SUM(metal)'];
    echo "<br>";
}
?>
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DAILY COUNT OF THE ALL THE WASTE COLLECTED</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                         <thead class=" text-primary">



  <?php
include "db.php";

$sql="SELECT * FROM collection ";
$result= mysqli_query($con, $sql) or die (mysqli_error($con));
?>
 

        <th>PLASTIC</th>
          <th>METAL</th>
            <th>ELECTRONIC WASTE</th>
             <th>STAFF ID</th>
             <th>DATE</th>
             
                     </thead>
                       <tbody>
                      
                          <?php
                               while($row= mysqli_fetch_array($result))
                         
                           {
                           ?>
                           <tr >
                        
                           <td><?php echo $row['plastic'] ?></td>
                           <td><?php echo $row['metal'] ?></td>
                           <td><?php echo $row['ewaste'] ?></td>
                           <td><?php echo $row['staff_id'] ?></td>
                           <td><?php echo $row['date'] ?></td>
                        
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
<?php
include "footer.php";
?>