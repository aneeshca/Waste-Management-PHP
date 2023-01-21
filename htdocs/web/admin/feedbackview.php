<?php
include "header.php";
include "nav-bar.php";
//include "adminredirection.php";
?>


  
<div class="content">
<div class="container-fluid">


<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">feedback</h4>
                  <p class="card-category"> the list of feedback form the user</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
<?php
include "db.php";
$sql="SELECT * FROM feedback,user where user.sl=feedback.user_id ";
$result= mysqli_query($con,$sql);

?>
 <th>USER ID</th>
   <th> Name</th>
      <th>view</th>
        <th>comment</th>
           <th>email</th>
                     </thead>
                       <tbody>
                        <?php
                        while($row= mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['views'] . "</td>";
                        echo "<td>" . $row['comment'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
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