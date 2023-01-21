<?php
if(!isset($_SESSION['user_id'])&&!isset($_SESSION['name'])&&!isset($_SESSION['siname'])){
 
    header("location:index.php");

}

?>