
<?php include('public_header.php');?>
<div id="sidebar-left">
	<h2>Brands</h2>
<ul>
      <li><a href="<?= base_url('View_product/view_tablet_phone_Apple')?>">Apple</a></li>
      <li><a href="<?= base_url('View_product/view_tablet_phone_Samsung')?>">Samsung</a></li>
      <li><a href="<?= base_url('View_product/view_tablet_phone_Nokia')?>">Nokia</a></li>
      <li><a href="<?= base_url('View_product/view_tablet_phone_HTC')?>">HTC</a></li>
      <li><a href="<?= base_url('View_product/view_tablet_phone_Huawei')?>">Huawei</a></li>
	   <li><a href="<?= base_url('View_product/view_tablet_phone_Walton')?>">Walton</a></li>
	   <li><a href="<?= base_url('View_product/view_tablet_phone_Sony')?>">Sony</a></li>
	   <li><a href="<?= base_url('View_product/view_tablet_phone_Oppo')?>">Oppo</a></li>
	   <li><a href="<?= base_url('View_product/view_tablet_phone_Micromax')?>">Micromax</a></li>
	   <li><a href="<?= base_url('View_product/view_tablet_phone_Symphoni')?>">Symphoni</a></li>
	</ul>
									   
				    	

</div>

<div id="main">
<div class="maincontent">
    	
		    	         <div class="rightsidebar span_3_of_1" style=" float:left; margin-left:30px;">
									
									 <style> 
											h2{margin-left:30px}
											ul li {list-style: none !important; padding: 15px}
											ul li a{text-decoration: none; }
													.btn-primary {
														color: #fff;
														background-color: #593196;
														border-color: #593196;}
	
													
													a:hover {
														    text-decoration: none;
														}
												#sidebar-left{
													float:left;
													width:15%;
												
												}
												#main{
														float:left;
														width:75%;
														
												}
												img{margin-top: 5px}
									</style>
												
				 			</div>

    	<?php if(count($getproducts)):
			    $count=$this->uri->segment(3, 0);
			  	 foreach ($getproducts as $getproduct): ?>
	      		<div class="productblock" style="margin:20px;">

	      		
			  		
						<div class="grid_1_of_4 images_1_of_4"style="border: 2px solid #ddd !important;
						width: 23% !important; text-align:center; displa:block; float:left;margin:8px;height:350px">
							 <a href="<?= base_url('View_product/View_smartphone_details/'.$getproduct->id)?>">
							 	<img src="<?php echo base_url('uploads/').$getproduct->images;?>"height="140px" width="width:100%"/></a>
							
							 <h4><?php echo word_limiter($getproduct->productName,3);?> </h4>
							<p><span class="price">Main price: ৳<?php echo $getproduct->main_price;?></span></p>
							<p><span class="price">Percentage: <?php echo $getproduct->percentage;?>%</span></p>
							 <p><span class="price">Offer price: ৳<?php echo $getproduct->offer_price;?></span></p>
							 <p><span class="price">Offer End: <?php echo $getproduct->end_date;?></span></p>
						     <div class="btn btn-primary"><span><a href="<?= base_url('View_product/View_smartphone_details/'.$getproduct->id)?>" 
						     	class="details">Details</a></span></div>
						     </div>

				</div>
				
			
		
	  		<?php  endforeach; endif; ?>
				
			
  
</div>


</div>
<?php include('public_footer.php');?>