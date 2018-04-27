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
  <style>
  input[type=submit] {
width:60px;
background-color:red;
color:#fff;
margin-top: 0px !important;
border:0px solid #FFCB00;
padding:5px;
font-size:16px;
cursor:pointer;
border-radius:5px;
}
.btn btn-danger{width: 60px;}
  </style>
 <table class="table table-hover">
  <thead>
 <?php if($feedback =$this->session->flashdata('feedback')): ?>

                              <div class="alert alert-dismissible alert-success">
                                 <?= $feedback; ?>
                               </div>
                              <?php endif; ?>
    <tr class="table-ccc">
      <th scope="col">S-No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
    
      <th scope="col">Main Price</th>
        <th scope="col">Percentage</th>
      <th scope="col">Offer Price</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
       <th scope="col">Delete</th>
    </tr>
  </thead>

  <tbody>
  	<?php if(count($products)):
    $count=$this->uri->segment(3, 0);
  	 foreach ($products as $product): ?>
  		
  	
    <tr class="table-default">
      <td><?= ++$count;?></td>
      <td ><?php echo word_limiter($product->productName,2);?></td>
      <td ><?php echo $product->catName;?></td>
      <td ><?php echo $product->brandName;?></td>
     
      <td ><?php echo $product->main_price; ?></td>
       <td ><?php echo $product->percentage;?>%</td>
      <td ><?php echo $product->offer_price; ?></td>

     
      <td ><img src="<?php echo base_url('uploads/').$product->images;?>"height="40px" width="60px"/></td>

      <td> <?= anchor("Product/product_edit/{$product->id}",'Edit',['class'=>'btn btn-primary']);?> </td>



        <td>
          
               <?=
                  form_open('Product/delete_product'),
                  form_hidden('product_id', $product->id),
                  form_submit(array('name' => 'Delete','class'=>'btn btn-danger','value' =>'Delete','onclick'=>'confirmation()')),
                  form_close();
              ?>
      
       </td>
        <?php 
   endforeach;
endif;
?>
      
       
   </tr>
  
 
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

  

 
  <script type="text/javascript" src="<?= base_url('assets/js/tiny-mce/tiny_mce.js') ?>"> </script>


<?php include('admin_footer.php');?>

