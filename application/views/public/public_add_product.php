<?php include('public_dashboard_header.php');?>

<head>
 <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
   </head>
  
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
   
    </script>
    <style>
           .error{color:red;margin-bottom: 7px;}
                 select, textarea, input[type="text"], input[type="password"], input[type="date"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    display: inline-block;
    height: 30px;
    padding: 4px 6px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 20px;
    color: #555;
    vertical-align: middle;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
#productName{width: 400px;}
    </style>
   
  <div id="main" style="margin-left:40px">
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block" > 


           <!--  < -->
           
                <?php if($success_msg =$this->session->flashdata('success_msg')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $success_msg; ?>
                               </div>

                              <?php endif; ?>
                               <?php if($error_msg =$this->session->flashdata('error_msg')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $error_msg; ?>
                               </div>

                              <?php endif; ?>

                <?php echo form_open_multipart('Public_product_add/add'); ?>
                <table>
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                         <?php echo form_input(array('id' => 'productName','type'=>'text', 'name' => 'productName','placeholder' => 'Enter Product Name...','value'=>set_value('productName'))); ?><br />
                             <div class="error">  <?php echo form_error('productName'); ?></div>
                        
                    </td>
                </tr>
        <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select name="id">
                        <option value="none" >Select Catagory</option>
                            <?php if(count($categories)):?>
                        <?php foreach($categories as $catagory):?>
                      


                        <option value=<?php echo $catagory->id?><?php echo set_select('id',$catagory->id)?>><?php echo $catagory->catName?></option>

                    
                        <?php endforeach; ?>
                    <?php endif;?>
                    
                    
               
                        </select>
                <div class="error"><?php echo form_error('id'); ?> </div>
                        
                     </td>
                </tr>
        <tr>
                    <td>
                        <label>Brand</label>
                    </td> 
                    <td>
                        <select name="brand_id">
                        <option value="nothing">Select Brand</option>
                        <?php if(count($brands)):?>
                        <?php foreach($brands as $brand):?>
                       


                        <option value=<?php echo $brand->id; ?><?php echo set_select('brand_id',$brand->id)?>><?php echo $brand->brandName;?></option>
                        
                        <?php endforeach; ?>
                         <?php endif; ?>
                         
                   
                        </select>
                         <div class="error">  <?php echo form_error('brand_id'); ?></div>
                        
                    </td>
                </tr>
        
         <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                         

                        
                             <?php echo form_textarea(array('id' => 'myTextarea','type'=>'textarea','class'=>'number1','value'=>set_value('textarea'), 'name' => 'textarea')); ?><br />
                             
                               <div class="error">  <?php echo form_error('textarea'); ?></div>


                    </td>


                  <script src="<?= base_url('assets/tinymce/js/tinymce/tinymce.min.js')?>"></script>


                    <script>
                    tinymce.init({
                        selector: '#myTextarea'
                       
                    });
                    </script>
                       
                </tr>
                



                
        <tr>
                    <td>
                        <label>Main price</label>
                    </td>
                    <td>
                        <?php echo form_input(array('id' => 'price','type'=>'text','type'=>'number', 'name' => 'price','placeholder' => 'Enter Price...','value'=>set_value('price'))); ?><br />
                              
                               <div class="error">  <?php echo form_error('price'); ?></div>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Discount Percentage</label>
                    </td>
                    <td>
                         <?php echo form_input(array('id' => 'percentage','type'=>'number', 'name' => 'percentage','placeholder' => 'Enter Percentage...','value'=>set_value('percentage'))); ?><br />
                             
                               <div class="error">  <?php echo form_error('percentage'); ?></div>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Offer Price</label>
                    </td>
                    <td>
                         <?php echo form_input(array('id' => 'offer', 'name' => 'offer','placeholder' => 'Enter Price...','value'=>set_value('offer'))); ?><br />
                            
                               <div class="error">  <?php echo form_error('offer'); ?></div>
                        
                    </td>
                </tr>
            
                
                      <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                  
                        <?php echo form_upload(array('id' => 'picture','type'=>'file', 'name' => 'picture',)); ?><br />
                  
                        <div class="error">  <?php echo form_error('picture'); ?></div>
                    </td>
                </tr>
                <style> #picture{padding-bottom: 35px;}</style>

                <tr>
                  <td><label>Offer Start Date</label></td>

                  <td>
                    
                            
                 


        
                         <div id="datetimepicker" class="input-append date">                   
                     <?php echo form_input(array('type'=>'text','placeholder'=>'Start From', 'name' => 'start_date','value'=>set_value('start_date'))); ?>
                    <span class="add-on" style="width: 35px; height: 30px;">
                      <i data-time-icon="icon-time" data-date-icon="icon-calendar" style="height:30px"></i>
                    </span>

                     </div>
                   
                      <div class="error">  <?php echo form_error('start_date'); ?></div>
                   </td>
                         </tr>

                         <td>
                 <tr>
                  <td><label>Offer End Date</label></td>

                  <td>
                            <div id="datetimepick" class="input-append date">                 
                             <?php echo form_input(array('type'=>'text','placeholder'=>'End date', 'name' => 'end_date','value'=>set_value('end_date'))); ?>
                            <span class="add-on"  style="width:35px; height:30px;">
                              <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                            </span>

                            </div>
                            
                             <div class="error">  <?php echo form_error('end_date'); ?></div>
  
                   </td>
                   
              </tr>

             

                 <script type="text/javascript">
                      $('#datetimepicker').datetimepicker({
                        format: 'yyyy/MM/dd hh:mm:ss',
                        language: 'pt-BR'
                      });
                    </script>
                    
                     <script type="text/javascript">
                      $('#datetimepick').datetimepicker({
                         format: 'yyyy/MM/dd hh:mm:ss',
                        language: 'pt-BR'
                      });
                    </script>
  
                <tr>
                     
                  
                      <td style="vertical-align: top; padding-top: 9px;">
                        <label>Product Source</label>
                    </td>
                    
                    <td>
                         
                             <?php echo form_textarea(array('id' => 'Textarea','type'=>'textarea','value'=>set_value('source'), 'name' => 'source')); ?><br />
                              
                               <div class="error">  <?php echo form_error('source'); ?></div>
                        
                    </td>
                </tr>

                   <script>
                    tinymce.init({
                        selector: '#Textarea'
                       
                    });
                    </script>
                   <tr>


                    <td></td>
                    <td>
                         <?php echo form_submit(array('id' => 'submit','type' => 'submit','name'=>'submit', 'value' => 'Save')); ?>
                        
                    </td>
                </tr>

                
            </table>
           
             <?php echo form_close(); ?>
        </div>
    </div>
</div>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 <script>



var $price      = $("input[name='price']"),
    $percentage = $("input[name='percentage']").on("input", calculatePrice),
    $discount   = $("input[name='offer']");
    

function calculatePrice() {
    var price      = $price.val();
    var percentage = $(this).val();
  
    var calcPrice  = (price - ( price *(percentage /100 ))).toFixed(2);
    
    $discount.val( calcPrice );
}

</script>


<!--     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

 
 -->

<!-- 

<script type='text/javascript'>
$(function(){
$('.input-daterange').datepicker({
    autoclose: true
});
});

</script>
 -->

</div>

   

<?php include('public_footer.php');?>



