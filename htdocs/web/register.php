<?php 
session_start();
  include "db.php";
 
  //$email = "";
  $error="";
  if (isset($_POST['save'])) {
  	$name= $_POST['fname'];
       $phone= $_POST['phone'];
    $adrs= $_POST['address'];
    $sname= $_POST['sname'];
    $pin= $_POST['pinnumber'];
    $dist= $_POST['district'];
  	$email= $_POST['email'];
    $password= $_POST['password'];
    $confirm= $_POST['confirm'];
    
  
  	$sql_e = "SELECT * FROM user WHERE email='$email'";
  	
  	$res_e = mysqli_query($con, $sql_e);

  		
  	if(mysqli_num_rows($res_e) > 0){
  	  $_SESSION["error"] = "Sorry... email already taken"; 	
        header("location:sign-up.php");
  	}elseif($confirm == $password){
      
           $query = "INSERT INTO `user`( `name`, `sname`, `email`, `phone`, `address`, `pinnumber`, `district`, `password`) 
      	    	  VALUES ('$name', '$sname', '$email', '$phone', '$adrs', '$pin','$dist','".md5($password)."')";
           $results = mysqli_query($con, $query) or die(mysqli_error($con));
           $_SESSION["error"] = "";
           header("location:login.php");
           exit();
      
      
          }
          else{
            $_SESSION["error"]= " password doesnt match";
            header("location:sign-up.php");
          }
        }
?>
