
<?php include('public_header.php');?>

<div id="sidebar-left">	.
	
		</div>


<div id="main">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<label class="previous">
    <p><i class="fas fa-arrow-left" style="margin-right:3px"></i><a href="javascript:window.history.go(-1);">Previous</a></p>

  </label>

<div class="maincontent" style="min-height:700px;">
    	
		    	           
									
									 <style> 
										h2{margin-left:30px}
											ul li {list-style: none !important; padding: 15px}
											ul li a{text-decoration: none;}
													.btn-primary {
														color: #fff;
														background-color: #593196;
														border-color: #593196;}
														
														a:hover{color:#green;text-decoration: none;}
														
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
												#sidebar_right{
														float:right;
														width:10%;
														
												img{height: 200px; }
												.pro_desc_box{border: 0px solid #d1cec8;}
												
										
									</style>  
			  
	      		      <div class="productblock" style="margin:20px;">

	      		
			  		 

						   <h4  style="margin-bottom:40px;"> <?php echo word_limiter($getproducts->productName);?></h4>


						   	
			       <div class="row">
							  <div class="col-md-3">
 								<a href="<?= base_url('View_product/View_computer_details/'.$getproducts->id)?>">
							 	<img src="<?php echo base_url('uploads/').$getproducts->images;?>" height="140px" width="190px"/></a>

							  </div>



							  <div class="col-md-3">

							  	<p><span class="price">Main price: ৳<?php echo $getproducts->main_price;?></span></p>
							   <p><span class="price">Discount: <?php echo $getproducts->percentage;?>%</span></p>

							 <p><span class="price">Offer price: ৳<?php echo $getproducts->offer_price;?></span></p>
							  <p><span class="price">Offer Start date: <?php echo $getproducts->start_date;?></span></p>
							   <p><span class="price">Offer End Date:<?php echo $getproducts->end_date;?></span></p>

							</div>
							  <div class="col-md-4" style="background:#ddd">
							  	<h3 style="color:green;margin-top:0px">Product Source</h3>
							  	<p style="border:none"><?php echo $getproducts->source;?></p>
							</div>

                              

<!-- AddToAny BEGIN -->
<script async src="https://static.addtoany.com/menu/page.js"></script>

<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
	<p style="color:green; font-size:18px;font-weight: bold;">Share On</p>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_pinterest"></a>
</div>

					</div>			

						    
				    </div>


<div class="card mb-3" style="width:80%;float:left">
  <h3 class="card-header">Product Details</h3>
	  <div class="card-body">
	   <p><span class="price"><?php echo $getproducts->description;?></span></p>
	  </div>
 
 

		  <div class="card-footer text-muted"> Product added 
		   
		    <?php echo $getproducts->created;?>
		  </div>
	

</div>
				
			
		
	  	
				
			
  
</div>

</div>
</div>
<?php include('public_footer.php');?>


