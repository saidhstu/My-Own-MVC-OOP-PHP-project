  <?php include('admin_header.php');?>
  <?php include('admin_sidebar.php');?>


  <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
                 

                  <?php echo form_open('Category/catadd'); ?>
                  <table>

                        <tr>
                            <td>
                               <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>

                              <?php endif; ?>
                             

                              <?php echo form_input(array('id' => 'catadd','type'=>'text', 'name' => 'catName','placeholder' => 'Enter Category Name...','value'=>set_value('catName'))); ?><br />
                              
                              <div class="error"> <?php echo form_error('catName'); ?></div>
                            </td>
                        </tr>
						         <tr> 
                            <td>
                              <?php echo form_submit(array('id' => 'submit','type' => 'submit','name'=>'submit', 'value' => 'Save')); ?>
                                
                            </td>
                        </tr>
                    </table>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>


<style>
.error{color:red;}

</style>
        
<?php include('admin_footer.php');?>