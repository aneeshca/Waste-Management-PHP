<?php
include "header.php";
include "db.php";
$qry="SELECT * from userb,user where userb.status='pending' AND userb.user_id = user.sl AND user.sl='".$_SESSION['user_id']."' ";
$coz=mysqli_query($con, $qry);

    $row=mysqli_fetch_assoc($coz);
    $user_id=$row["user_id"];
    $order_id=$row["order_id"];
if(isset($_POST['cancel'])){
mysqli_query($con,"UPDATE userb SET status='cancelled' where user_id=$user_id AND order_id=$order_id" );
header( 'Location:user.php' ) ;
}
?>