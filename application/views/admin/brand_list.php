<?php include('admin_header.php');?>
<?php include('admin_sidebar.php');?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layout.css');?>">  
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block"> 
<style>
.table-ccc{background:#593196;color: #fff}
</style>
 <table class="table table-hover">
  <thead>
 <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>
                              <?php endif; ?>
    <tr class="table-ccc">
      <th scope="col">Serial No</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <style>
  input[type=submit] {
width:40%;
background-color:red;
color:#fff;
margin-top: 0px !important;
border:0px solid #FFCB00;
padding:5px;
font-size:16px;
cursor:pointer;
border-radius:5px;
}
  </style>
  <tbody>
  	<?php if(count($brands)):
    $count=$this->uri->segment(3, 0);
  	 foreach ($brands as $brand): ?>
  		
  	
    <tr class="table-default">
      <td><?= ++$count;?></th>
      <td ><?php echo $brand->brandName;?></th>
      <td> <?= anchor("Brand/brand_edit/{$brand->id}",'Edit',['class'=>'btn btn-primary']);?></td>
       
        <td>
        <?=
            form_open('Brand/delete_brand'),
            form_hidden('brand_id', $brand->id),
            form_submit(array('name' => 'submit','class'=>'btn btn-danger','value' =>'Delete','onclick'=>'confirmation()')),
            form_close();
        ?>
      </td>
       
   
  
   <?php 
   endforeach;
endif;
?>
  </tbody>
</table> 
<style>
ul li {
  font-size: 24px;
  padding: 6px;
}
.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #593196;
  background-color: #fff;
  border: 1px solid #EDEDED;
}
</style>
<?= $this->pagination->create_links(); ?>
     
               </div>
            </div>
        </div>

        <script>
function confirmation()
{
   var r=confirm("are you sure to delete?")
   if (r==true)
  {
    alert("pressed OK!")
    // call the controller
  }
  else
  {
   alert("pressed Cancel!");
   return false;
  }
}
</script>





<?php include('admin_footer.php');?>

