<?php
 
 class View_electronic_products extends CI_Controller{




 		public function get_all_electronic_products(){
 			 $getproducts=$this->Product_public->get_all_Cell_phone();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);

 		}

 		

 }