  <?php include('admin_header.php');?>
  <?php include('admin_sidebar.php');?>


  <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Brand</h2>
               <div class="block copyblock">
                 

                  <?php echo form_open('Brand/brandadd'); ?>
                  <table>
                    
                        <tr>
                            <td>
                               <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>

                              <?php endif; ?>
                             

                              <?php echo form_input(array('type'=>'text', 'name' => 'brandName','placeholder' => 'Enter Brand Name...','value'=>set_value('brandName'))); ?><br />
                              <div class="error"> <?php echo form_error('brandName'); ?></div>
                            </td>
                        </tr>
                                 <tr> 
                            <td>
                              <?php echo form_submit(array('type' => 'submit','name'=>'submit', 'value' => 'Save')); ?>
                                
                            </td>
                        </tr>
                    </table>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

<style>.error{color:red;}</style>

        
<?php include('admin_footer.php');?>