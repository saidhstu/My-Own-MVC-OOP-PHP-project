<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Discount</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"> </script>
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"> </script>
  <script src="<?= base_url('assets/js/jquery.js') ?>"> </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

</style>
</head>
<body>
 <div id="header">
                   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="image" href="<?php echo base_url('Public_login/check_public_login') ?>" style="height:20px"> <img src="<?= base_url('images/logo.jpg') ?>"  style="height: 85px;margin: -35px;margin-left: 20px; margin-right:30px" /></a>
   <span class="fas fa-align-right" style="margin-right:10px;"></span> <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      

        <a class="nav-link" href="#"><span class="fas fa-user-circle" style="margin-right:10px;"></span>User Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-edit" style="margin-right:10px;"></span>Change Password</a>
      </li>
   
    </ul>
     
   
  </div>
  <ul class="navbar-nav mr-auto">
     <li class="nav-item active" >
        <a class="nav-link"  style="float:right; "href="<?= base_url('Public_login/logout')?>">Logout <span class="sr-only">(current)</span></a>
      </li>
      
   
    </ul>
</nav>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


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

      #sidebar-left{
        float:left;
        width:15%;
         background-color:#CECECE;
         min-height: 900px;
      }

      #main{
        float:left;
        width:70%;
      
    }

    
  #sidebar-right{
        float:left;
        width:15%;
       
  }
.section_menu{margin-top: 100px;}
      
ul li{list-style: none;padding:10px;}
ul li a{}
 </style>
</div>


  <div id="sidebar-left"style="margin-top:-20px;">

     <ul class="section_menu">
               

                  <li><span class="fab fa-medrt" style="margin-right:10px;"></span><a class="menuitem" >Product Options</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Public_product_add/add') ?>">Add Product</a> </li>
                        <li><a href="<?= base_url('Public_product_add/productlist') ?>">Product List</a> </li>
                    </ul>
                </li>


                <li><span class="fab fa-medrt" style="margin-right:10px;"></span><a class="menuitem" >Product Option</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Public_product_add/add') ?>">Add Product</a> </li>
                        <li><a href="<?= base_url('Admin_login/catlist') ?>">Product List</a> </li>
                    </ul>
                </li>
            </ul>

  </div>
   

