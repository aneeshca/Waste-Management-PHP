

<?php
include "header.php";
include "db.php";
include "redirect.php";
$qry="SELECT * from userb,user where userb.status='pending' AND userb.user_id = user.sl AND user.sl='".$_SESSION['user_id']."' ";
$co= mysqli_query($con,$qry);
$rows= mysqli_fetch_assoc($co);
if(($rows)>0){

?>
   <div class="card-header card-header-primary">
                  <div class="card-title " align="center"> <h2 style="color:green; background-color:tomato;"  >Booking  Status</h2></div>
                  <h3 class="card-category" style="color:blue" > Your booking deatils </h3>
                </div>
                
      <form action="cancel.php" class="form-style-4" action="" method="POST">
      <label for="field1">
        <span>Your Name:</span><input type="text" name="field1" value="<?php echo $rows['name'] ?>" readonly />
         </label>
          <label for="field2">
           <span> Phone Number:</span><input type="email" name="field2" value="<?php echo $rows['phone'] ?>"  readonly />
             </label>
        <label for="field3">
          <span>Pin Code:</span><input type="text" name="field3"  value="<?php echo $rows['pinnumber'] ?>"  readonly  />
            </label>
             <label for="field4">
              <span> Address:</span><textarea name="field4" value=""  readonly  ><?php echo $rows['address'] ?></textarea>
                </label>
                <label for="field5">
                  <span>Status:</span><input type="text" name="field5" value="pending" readonly />
                 </label>
                 <label>
                   <span> </span><input type="submit" name="cancel" value="cancel" />
                    </label>
                      </form>
                       <?php
                        }
                         else{
  
                           }
?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="card-title " align="center"> <h2 style="color:green; background-color:tomato;"  >Booking History </h2></div>
                  <h3 class="card-category" style="color:blue"> Your booking deatils </h3>
                </div>
                <div class="card-body">
                  
                    <table color="red" class="table table-green table-hover table-bordered">
                      <thead class=" text-primary">
                     
<?php

$sql= "SELECT * FROM user,userb WHERE user.sl=userb.user_id  AND  user.sl='".$_SESSION['user_id']."' order by date desc " ;

$result1 =mysqli_query($con, $sql);
?>
                       
                        <th scope="col" bgcolor='black'>NAME</th>
                      <!--  <th scope="col"bgcolor='black'>PHONE NUMBER</th>
                        <th scope="col"bgcolor='black'>ADDRESS</th> -->
                        <th scope="col"bgcolor='black'>DATE</th>
                        <th scope="col"bgcolor='black'>STATUS</th>
                      
                        
                      </thead>
                      <tbody>
                        <?php
                        while($row =mysqli_fetch_assoc($result1))
                        {
                          echo "<tr>";
                        
                           echo "<td  bgcolor='lightblue'> <b>" . $row['name'] . "</b></td>";
                        //    echo "<td bgcolor='lightblue'><b>" . $row['phone'] . "</b></td>";
                          // echo "<td bgcolor='lightblue'><b>" . $row['address'] . "</b></td>";
                           echo "<td bgcolor='lightblue'><b>" . $row['date'] . "</b></td>";
                          echo "<td bgcolor='lightblue'><FONT COLOR='red'><b> " . $row['status'] . "</b></FONT></td>";
                                                   
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
<!-- css -->
<style type="text/css">
.form-style-4{
  margin: 15px ;
	font-size: 16px;
	background: #495C70;
	padding: 30px 30px 15px 30px;
	border: 10px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	overflow: hidden;
	resize:none;
	height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
</style>

<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>