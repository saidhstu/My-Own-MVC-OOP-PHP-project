   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    
 <script src="<?php echo base_url('assets/js/js/jquery-1.6.4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.ui.widget.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.ui.accordion.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.effects.core.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.effects.slide.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.ui.mouse.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/jquery-ui/jquery.ui.sortable.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/table/jquery.dataTables.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/js/table/table.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/js/setup.js'); ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>"> 
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fontawesome.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fontawesome.min.css');?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"> </script>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"> </script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"> </script>
    
   


<style>

.image img{
  background: transparent;
  border-radius: 50%;
  height: 83px;
  margin-top: -18px;
  margin-bottom: -18px;
  margin-right: 50px;
  margin-left: 50px;
}
ul li{font-size: 24px;}
ul li a{color:#fff;font-size:16px;}
#menue1{background: #ddd !important}

.logout {
  height: 33px;
  width: 80px;
  background: #fff;
  color: black;
  font-size: 20px;
  text-align: center;
  border-radius: 10%;
  float: right;
}
.logout a{text-decoration: none;}
</style>
</head>
<body>
    <nav class="navbar  navbar-dark bg-primary">
     <a class="image" href="<?= base_url('Admin_dashboard/dashboard') ?>"><img src="<?= base_url('images/logo.jpg') ?>"</a>
  
     <div class="logout"><a href="<?= base_url('admin/admin_logout')?>">Logout</a></div>
     

</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <span class="fas fa-align-right" style="margin-right:10px;"></span> <a class="navbar-brand" href="#">Dashboard</a>


  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      

        <a class="nav-link" href="#"><span class="fas fa-user-circle" style="margin-right:10px;"></span>User Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-edit" style="margin-right:10px;"></span>Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-inbox" style="margin-right:10px;"></span>Inbox</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-address-card" style="margin-right:10px;"></span>About</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



      <style>
        ul{list-style: none }
        ul li{text-decoration: none;}
        ul li a{color:#444; text-decoration: none;}
        ul li a ul li a{color:#444; text-decoration: none;}
              .col-lg-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
        margin-left: -120px;
      }

       </style>













   
