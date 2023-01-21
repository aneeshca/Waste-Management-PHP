<?php

include "db.php";
$sl=$_GET["id"];
$rest=mysqli_query($con,"DELETE FROM staff WHERE sl=$sl " );

if($rest>0){
     $_SESSION['del']="deleted";
     header( 'Location:staff.php' ) ;
}
else{

}

?>
