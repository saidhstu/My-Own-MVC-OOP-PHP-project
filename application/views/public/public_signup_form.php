<html>
<head>
		<style>		
	#sidebar-left{	float:left;width:25%;}
	#main{float:left;width:50%;}
	#sidebar-right{float:left;width:10%;}
	#footer{clear:both;height: 50px;width: 100%;text-align: center;}
	#sidebar-left, #main, #sidebar-right{min-height: 600px}
  input, select {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    height: 35px;
  
}
.alert-danger{padding:5px}
.input_error{margin-left:10px; color:red; font-size: 15px;}

		</style>
	
	</head>
	
	
	<body>
		
<div id="header">
  <?php include('public_header.php');?>
</div>


		<div id="sidebar-left"></div>
		<div id="main">
  <h2 style="margin-bottom:40px; margin-top:100px;color:Green;width:200px">Register</h2>
         <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>

                              <?php endif; ?>

  	        
<table>
    
     

    <tr>
      <div class="control-group">

    
     
    </div>
  </tr>
</table>

<div class="grid_10">
    <div class="box round first grid">
      
  
        <div class="block">               
        
           <?php echo form_open('Public_signup/public_signup_add'); ?>
            <table class="form">          
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
           <?php echo form_input(array('id' => 'username','type'=>'text', 'name' => 'username' ,'placeholder' => 'Enter User Name...','value'=>set_value('username'))); ?><br />
               <?php if($checkUserName =$this->session->flashdata('checkUserName')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $checkUserName; ?>
                               </div>

                              <?php endif; ?>
         
                    </td>
                    
                    
                    <td> 
                      <div class="input_error">
                      <?php echo form_error('username'); ?>
                        
                    </div>
                  </td>
                </tr>
         <tr>
                    <td>
                        <label>First Name</label>
                    </td>
                    <td>
              <?php echo form_input(array('id' => 'firstName','type'=>'text', 'name' => 'firstName','placeholder' => 'Enter First Name...','value'=>set_value('firstName'))); ?><br />
      
                    </td>
                     <td> 
                      <div class="input_error" style="color:red;margin-left:10px;">
                      <?php echo form_error('firstName'); ?>
                    </div>
                  </td>
                </tr>
        
         <tr>
                    <td>
                        <label>Last Name</label>
                    </td>
                    <td>
              <?php echo form_input(array('id' => 'lastName','type'=>'text', 'name' => 'lastName','placeholder' => 'Enter Last Name...','value'=>set_value('lastName'))); ?><br />
        
                    </td>
                     <td> 
                      <div class="input_error" style="background:none; border:none;margin-left:10px;">
                      <?php echo form_error('lastName'); ?>
                    </div>
                  </td>
                </tr>
        
         <tr>
            <td>
                <label>E-mail</label>
            </td>
            <td>
           <?php echo form_input(array('id' => 'email','type'=>'text', 'name' => 'email','placeholder' => 'Enter Email Address...','value'=>set_value('email'))); ?><br />
          <label id="message" style="color: #D8000C"></label>
          
          </td>
           <td> 
               <div class="input_error" style="background:none; border:none;margin-left:10px;">

                      <?php echo form_error('email'); ?>
                    </div>
                  </td>
        </tr>
         <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
           <?php echo form_input(array('id' => 'password','type'=>'password', 'name' => 'password','placeholder' => 'Enter Password...','value'=>set_value('password'))); ?><br />
         
          </td>
           <td> 
                      <div class="input_error" style="background:none; border:none;margin-left:10px;">
                      <?php echo form_error('password'); ?>
                    </div>
                  </td>
        </tr>
         <tr>
            <td>
                <label>Password (Confirm)</label>
            </td>
            <td>
            <?php echo form_input(array('id' => 'password_confirm','type'=>'password', 'name' => 'password_confirm','placeholder' => 'Enter User Name...','value'=>set_value('password_confirm'))); ?><br />
        
          </td>
           <td> 
                      <div class="input_error" style="background:none; border:none;margin-left:10px;">
                      <?php echo form_error('password_confirm'); ?>

                    </div>
                  </td>
        </tr>
         <tr>
              <td></td>

              <td >
                   <?php echo form_submit(array('id' => 'submit','class'=>'btn btn-success','type' => 'submit','name'=>'submit', 'value' => 'Register')); ?>
              </td>
        </tr>
            </table>
          
        </div>
    </div>
</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script type="text/javascript">
       $(document).ready(function() {
       /// make loader hidden in start
       $('#loading').hide(); 
       $('#email').blur(function(){
       var email_val = $("#email").val();
       var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
       if(filter.test(email_val)){
       // show loader
       $('#loading').show();
       $.post("<?php echo site_url()?>/Public_signup/email_check", {
       email: email_val
       }, function(response){
       $('#loading').hide();
       $('#message').html('').html(response.message).show().delay(7000).fadeOut();
      
       });
       return false;
       }
       });
       
       });   
 </script>
   




</div>


		<div id="sidebar-right"></div>
		<div id="footer"><?php include('public_footer.php');?></div>
	</body>
</html> 

