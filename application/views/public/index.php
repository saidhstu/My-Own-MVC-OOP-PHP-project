<?php include('public_header.php');?>




<div id="sidebar-left">	.

	</div>

	<div id="main">

       <div class="row">
    	
		    	         
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
													width:10%;
												
												}
												#main{
														float:left;
														width:80%;
														
												}
														.alert {
													padding: 15px;
													margin-bottom: 20px;
													border: 1px solid transparent;
													border-radius: 4px;
													width: 100%;
													text-align: center;
													font-size: 20px;
													color:green;
												}
													img{margin-top: 5px}


									</style>
												
									   
				    	
				        
			    <div class="alert alert-dismissible alert-primary" style="margin-top:30px">
									  
				<strong> Maximum Offers Products</strong> 
				</div>
				 			

			       
				     <div class="productblock" style="margin:20px;width:100% !important">
				     	<style> .productblock{width:100% !important}</style>

				      	<?php  if(count($getproducts)):
						    $count=$this->uri->segment(3, 0);
						  	 foreach ($getproducts as $getproduct): ?>

	      		
			  		
						<div class="grid_1_of_4 images_1_of_4"style="border: 2px solid #ddd !important;
						width: 23% !important; text-align:center; displa:block; float:left;margin:8px;height:350px">
							 <a href="<?= base_url('View_product/View_index_details/'.$getproduct->id)?>">
							 	<img src="<?php echo base_url('uploads/').$getproduct->images;?>"height="140px" width="width:100%"/></a>
							 	
							
							 <h4><?php echo word_limiter($getproduct->productName,3);?> </h4>
							<p><span class="price">Main price: ৳<?php echo $getproduct->main_price;?></span></p>
							<p><span class="price">Percentage: <?php echo $getproduct->percentage;?>%</span></p>
							 <p><span class="price">Offer price: ৳<?php echo $getproduct->offer_price;?></span></p>
							 <p><span class="price">Offer End: <?php echo $getproduct->end_date;?></span></p>
						     <div class="btn btn-primary"><span><a href="<?= base_url('View_product/View_index_details/'.$getproduct->id)?>" 
						     	class="details">Details</a></span></div>
						     </div>
						   



				<?php  endforeach; endif; ?>
				
				</div>
		     
				


    </div>

		<div class="row">
			  <div class="alert alert-dismissible alert-primary" style="margin-top:30px; width:100%">
									  
				<strong> Hurry Up !!!! Offers Dates will ends for bellow products!!!</strong> 
				</div>
					<div class="productblock" style="margin:20px;">

				      	<?php  if(count($last_dates)):
						    $count=$this->uri->segment(3, 0);
						  	 foreach ($last_dates as $last_date): ?>

	      		
			  		
						<div class="grid_1_of_4 images_1_of_4"style="border: 2px solid #ddd !important;
						width: 23% !important; text-align:center; displa:block; float:left;margin:8px;height:350px">
							 <a href="<?= base_url('View_product/View_index_details/'.$last_date->id)?>">
							 	<img src="<?php echo base_url('uploads/').$last_date->images;?>"height="140px" width="width:100%"/></a>
							 	
							
							 <h4><?php echo word_limiter($last_date->productName,3);?> </h4>
							<p><span class="price">Main price: ৳<?php echo $last_date->main_price;?></span></p>
							<p><span class="price">Percentage: <?php echo $last_date->percentage;?>%</span></p>
							 <p><span class="price">Offer price: ৳<?php echo $last_date->offer_price;?></span></p>
							 <p><span class="price">Offer End: <?php echo $last_date->end_date;?></span></p>
						     <div class="btn btn-primary"><span><a href="<?= base_url('View_product/View_index_details/'.$getproduct->id)?>" 
						     	class="details">Details</a></span></div>

						     </div>
						   



				<?php  endforeach; endif; ?>
				
				</div>

      </div>

</div>

     



<?php include('public_footer.php');?>