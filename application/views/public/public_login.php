<html>
<head>
		<style>		
	#sidebar-left{	float:left;width:25%;}
	#main{float:left;width:50%;}
	#sidebar-right{float:left;width:10%;}
	#footer{clear:both;height: 50px;width: 100%;text-align: center;}
	#sidebar-left, #main, #sidebar-right{min-height: 300px}
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





<div class="grid_10">
    <div class="box round first grid">
      
     
        <h2 style="margin-bottom:40px; margin-top:100px;color:Green">Login</h2>
         
                    <div class="err_msg" style="color:red; margin-left:100px; margin-bottom:30px;">
                      <?php
                          echo "<div class='error_msg'>";
                          if (isset($error_message)) {
                          echo $error_message;
                          }
                       
                          echo "</div>";
                          ?>

                        </div>
                        
        <div class="block">               
         <div class="success" style="color:green; margin-left:100px; margin-bottom:30px;">
                          <?php
                          if (isset($message_display)) {
                          echo "<div class='message'>";
                          echo $message_display;
                          echo "</div>";
                          }
                          ?>
                        </div>
           <?php echo form_open('Public_login/check_public_login'); ?>
            <table class="form">          
                <tr>
                    <td>
                        
                        <label>User Name</label>
                    </td>
                    <td>
           <?php echo form_input(array('id' => 'username','type'=>'text', 'name' => 'username','placeholder' => 'Enter User Name...','value'=>set_value('username'))); ?><br />
              <label id="msg" style="color: #D8000C"></label>
         
                    </td>
                      
                    <td> 
                      <div class="input_error">
                      <?php echo form_error('username'); ?>
                        
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
              <td></td>

              <td >
                   <?php echo form_submit(array('id' => 'submit','class'=>'btn btn-success','type' => 'submit','name'=>'submit', 'value' => 'Login')); ?>
              </td>
        </tr>
            
          <?php  echo form_close(); ?>
          <tr></tr>
          <tr>
            <td></td>

            <td style="color:#593196"> Are you New !!!!!!!</td>
          
          </tr>

          <tr>
           
            
            <td><td style="color:#593196"> Please... <a href="<?= base_url('Public_signup/public_signup_add');?>" style="color:green">Create account</a></td></td>

          </tr>
          </table>
        </div>
    </div>
</div>


</div>


	
		<div id="footer"><?php include('public_footer.php');?></div>
	</body>
</html> 

