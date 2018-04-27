  <?php include('admin_header.php');?>
  <?php include('admin_sidebar.php');?>


  <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit Brand</h2>
               <div class="block copyblock">
                 
              

                  <?php echo form_open("Brand/update_brand/{$brand->id}"); ?>
                  <table>
                    <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>
                               <?php endif; ?>


                        <tr>
                            <td>
                              

                              <?php echo form_input(array('id' => 'brandadd','type'=>'text', 'name' => 'brandName','value'=>set_value('brandName',$brand->brandName))); ?><br />

                               <?php echo form_error('brandName'); ?>
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