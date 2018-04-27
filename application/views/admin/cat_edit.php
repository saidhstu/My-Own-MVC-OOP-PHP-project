  <?php include('admin_header.php');?>
  <?php include('admin_sidebar.php');?>


  <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit Category</h2>
               <div class="block copyblock">
                 
              

                  <?php echo form_open("Category/update_category/{$cat->id}"); ?>
                  <table>
                    <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>
                               <?php endif; ?>


                        <tr>
                            <td>
                              

                              <?php echo form_input(array('id' => 'catadd','type'=>'text', 'name' => 'catName','value'=>set_value('catName',$cat->catName))); ?><br />

                               <?php echo form_error('catName'); ?>
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



        
<?php include('admin_footer.php');?>