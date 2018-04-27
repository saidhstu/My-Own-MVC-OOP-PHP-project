<?php include('admin_header.php');?>
<?php include('admin_sidebar.php');?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block"> 
        
         
           <!--  < -->
           
                <?php if($success_msg =$this->session->flashdata('success_msg')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $success_msg; ?>
                               </div>

                              <?php endif; ?>

                               <?php if($error_msg =$this->session->flashdata('error')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $error_msg; ?>
                               </div>

                              <?php endif; ?>

                <?php echo form_open_multipart("Product/update_product/{$products->id}"); ?>


                <table>
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                     
                  

                    <td>
                      
                         <?php echo form_input(array('name' => 'productName','value'=>set_value('productName',$products->productName) )); ?>
                               <?php echo form_error('productName'); ?>
                        
                    </td>
                   
                </tr> 

         
                  <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                      <select name="id">
                      <?php foreach ($categories as $category) { ?>
                      <option <?php if($category->id == $products->cat_id){ echo 'selected="selected"'; } ?> value="<?php echo $category->id ?>">
                        <?php echo $category->catName?> </option>
                      <?php } ?>
                      </select>
                        

                        
                    </td>
                </tr>
        <tr>
                    <td>
                        <label>Brand</label>
                    </td> 
                    <td>
                      
                     
                        

                       <select name="brand_id">
                      <?php foreach ($brands as $brand) { ?>
                      <option <?php if($brand->id == $products->brand_id){ echo 'selected="selected"'; } ?> value="<?php echo $brand->id ?>">
                        <?php echo $brand->brandName?><?php } ?></option>
                      
                      </select>
                        
                       
                        
                    </td>
                </tr>
        
         <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                         
                        
                 
                        
                            <?php echo form_textarea(array('id' => 'myTextarea','type'=>'textarea','class'=>'number1','value'=>set_value('description',$products->description), 'name' => 'textarea')); ?><br />
                               <?php echo form_error('textarea'); ?>
<textarea name="myTextarea" id="myTextarea"></textarea>


                    </td>
                </tr>

                
        <tr>
                    <td>
                        <label>Main price</label>
                    </td>
                    <td>
                        <?php echo form_input(array('id' => 'price','type'=>'text','type'=>'number', 'name' => 'price','value'=>set_value('main_price',$products->main_price))); ?><br />
                               <?php echo form_error('price'); ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Discount Percentage</label>
                    </td>
                    <td>
                         <?php echo form_input(array('id' => 'percentage','type'=>'number', 'name' => 'percentage','value'=>set_value('percentage',$products->percentage))); ?><br />
                               <?php echo form_error('percentage'); ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Offer Price</label>
                    </td>
                    <td>
                         <?php echo form_input(array('id' => 'offer_price', 'name' => 'offer_price','value'=>set_value('offer_price',$products->offer_price))); ?><br />
                               <?php echo form_error('percentage'); ?>
                        
                    </td>
                </tr>
            
                <tr>
                      <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        
                        <?php echo form_upload(array('id' => 'picture','type'=>'file', 'name' => 'picture','value'=>set_value('images',$products->images))); ?><br />
                        <?php echo form_hidden(array('id' => 'old', 'name' => 'old','value'=>set_value('images',$products->images))); ?><br />
                       
                    </td>
                </tr>
                <tr>
                     
                    <td>
                        <label>Product Source</label>
                    </td>
                    
                    <td>
                         
                               
                        <?php echo form_input(array('id' => 'source','type'=>'text', 'name' => 'source','value'=>set_value('source',$products->source))); ?><br />
                               <?php echo form_error('source'); ?>
                    </td>
                </tr>
        
      

        
                   


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


<?php $this->load->helper('url');?>

  <script src="<?= base_url('assets/tinymce/js/tinymce/tinymce.min.js')?>"></script>


<script>
tinymce.init({
    selector: '#myTextarea'
});
</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script>



var $price      = $("input[name='price']").("input"),
    $percentage = $("input[name='percentage']").on("input", calculatePrice),
    $discount   = $("input[name='offer_price']");
    

function calculatePrice() {
    var price      = $price.val();
    var percentage = $(this).val();
  
    var calcPrice  = (price - ( price *(percentage /100 ))).toFixed(2);
    
    $discount.val( calcPrice );
}


    


<?php include('admin_footer.php');?>



