<?php
include "header.php";
?>




<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
         <div class="text-center" style="background-color:green">
         <h1 style="font-size:250%">ADMIN </h1>
          
         </div>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>USERS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./collected.php">
              <i class="material-icons">person</i>
              <p>waste count</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./aduser.php">
              <i class="material-icons">people</i>
              <p>customer Bookings</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./add-staff.php">
              <i class="material-icons">library_books</i>
              <p>Appoint Employee</p>
            </a>
          <li class="nav-item ">
            <a class="nav-link" href="./staff.php">
              <i class="material-icons">library_books</i>
              <p>Employees</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./feedbackview.php">
              <i class="fa fa-commenting-o"></i>
              <p>Feedback</p>
            </a>
          </li>
    
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          
           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="./admindetails.php">Profile</a>
                 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./adminlogout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>