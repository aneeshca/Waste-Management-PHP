<?php
include "header.php";
include "redirect.php";
include "user_nav.php";
$url = 'images/v3.jpg';
?>




<html lang="en">
<head>


<style type="text/css">
body
{
background-image:url('<?php echo $url ?>');
}
</style>

</head>


</html>



<?php
include "db.php";
$qry="SELECT * FROM notification";
$rows=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($rows);
//$row=0;

?>


	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" >
				<li>

			
			</div>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
 
  <?php
  if (!empty($row)){

  ?>
  <div class="alert alert-info alert-dismissible fade in">
    <h2 class="alert-heading">important notification</h2>
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?php echo $row['content']?>
    <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
 
</div>
<?php

}
?>

					  <div class="container">
						 <div class="agileits-banner-info">
							<h3>Dispose WASTE</h3>
							  <div align="center">
								<a href="book-now.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BOOK NOW</a>
                                 </div>
							   </div>
							</div>
						</div>
					</div>
				</li>
            </ul>
        </div>
    </div>

					
		     
	<div class="welcome-sub-wthree">
				<div align="left" class="col-md-5 banner_bottom_left" >
					<h4>HI,
						<span><?php echo $_SESSION['name'] ?></span> WELCOME TO OUR GREEN KERALA PROJECT
					</h4>
				</div>
			</div>
			
					




    <div class="clearfix"></div>


<?php
include "footer.php";
?>