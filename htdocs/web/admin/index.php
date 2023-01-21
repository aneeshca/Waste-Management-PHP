<?php
include "header.php";
include "nav-bar.php";
//include "adminredirection.php";
?>    
 <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Total List of Users</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">


<br>
<?php
include "db.php";

$sql="SELECT * FROM user  ";
$result= mysqli_query($con, $sql);


?>

        <th>ID</th>
        <th>Name</th>
                  
                     </thead>
                       <tbody>
                      
                          <?php
                               while($row= mysqli_fetch_array($result))
                         
                           {
                           ?>
                           <tr >
                           <td><?php echo $row['sl'] ?></td>
                           <td><?php echo $row['name'] ?></td>
                         
                        
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
include "footer.php"
?>
