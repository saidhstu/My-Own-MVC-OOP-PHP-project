<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!DOCTYPE html>
    <html>
    <head>
      <style>

   #mainmenue {
  width:500px;
  margin:50px auto;
  }

#login {
width:300px;
float:left;
border-radius:10px;
font-family:raleway;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px
}
input[type=text],input[type=password] {
width:99.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:raleway
}
input[type=submit] {
width:100%;
background-color:#FFBC00;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-top:10px;
margin-bottom:15px
}
label {
  display: inline-block;
  margin-bottom: -0.5rem;
  margin-top: 20px;
}

 </style>
    <title>Login</title>



<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    </head>
    <body>
    <div id="mainmenue">
    
          <div id="login">

               
<style>
.error_msg{color:red;}
</style>
                                      
                     
                   <?php echo "<div class='error_msg'>";   if (isset($error_message)) {  echo $error_message;} ?></div>
                     
                      

                      

      

                <?php echo form_open('Admin/admin_login_check'); ?>

                <label>UserName :</label>
               
                 <?php $data= array('name' => 'username','type'=>'text','id'=>'username','value'=>set_value('username'));  echo form_input($data);?>
                  <babel><?php echo form_error('username',"<p class='text-danger'>", "</p>"); ?></label>
                
                <label>Password :</label>

                
                <?php $data= array('name' => 'password','type'=>'password','id'=>'password', 'value'=>'password',);  echo form_input($data);?>
              
                <babel><?php echo form_error('password','<p class="text-danger">', '</p>'); ?></label>

                  

                <?php echo form_submit(array('name' => 'submit', 'type'=>'submit','value' =>'Login')); ?>
               
               <?php  echo form_close(); ?>

          </div>

    </div>
    </body>
    </html>
