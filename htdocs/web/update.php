<?php

include "db.php";
$user_id=$_GET["user_id"];
$order_id=$_GET["order_id"];
$staff_id=$_GET["staff_id"];



mysqli_query($con,"UPDATE userb SET status='Collected', staff_id='$staff_id' where user_id=$user_id AND order_id=$order_id" );


header( 'Location:staffbooking.php' ) ;
?>






