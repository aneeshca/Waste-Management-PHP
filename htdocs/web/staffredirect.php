<?php
if(!isset($_SESSION['staff_id'])&&!isset($_SESSION['name'])){
 
    header("location:index.php");

}

?>