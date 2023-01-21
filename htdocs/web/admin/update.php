<?php

include "db.php";
$user_id=$_GET["user_id"];
$order_id=$_GET["order_id"];

mysqli_query($con,"UPDATE userb SET status='Collected' where user_id=$user_id AND order_id=$order_id" );


header( 'Location:aduser.php' ) ;
?>
