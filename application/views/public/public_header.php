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
  <a class="image" href="<?php echo base_url() ?>" style="height:20px"> <img src="<?= base_url('images/logo.jpg') ?>"  style="height: 85px;margin: -35px;margin-left: 20px; margin-right:30px" /></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" type="text">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
  <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Public_login/check_public_login')?>">Login <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Public_signup/public_signup_add')?>">Signup <span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>


<style>
#middle{width: 90%;}
</style>

<navbar id="middle">

   <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="<?php echo base_url() ?>">Home</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Computers</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="<?= base_url('View_product/desktop')?>">Desktop</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('View_product/laptop') ?>">Laptop</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('View_product/monitor') ?>">Monitor</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('View_product/printer') ?>">Printer</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mobile Phone</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="<?= base_url('View_product/smart_phone') ?>">Smart Phone</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('View_product/cell_phone') ?>">Cell Phone</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('View_product/tablet_phone') ?>">Tablet</a>    
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Pizza</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Rice</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Sugar</a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
    
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cloth</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Shirt</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Pant</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Shari</a> 

      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Three Piece</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grocaries</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Oil</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Handwash</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Soap</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Shampo</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Electronics</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">TV</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">AC</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Ref</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Refrigerator</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home Applicances</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Dishwashers</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Microwaves</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Mixers</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Toasters</a>
    </div>
  </li>

   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Talk Time</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Gp</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Grameen Phone</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Robi</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Banglalink</a>
    </div>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
 
</ul>

</navbar>

  </div>
<!-- End of header -->

