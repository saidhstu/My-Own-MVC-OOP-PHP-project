<?php


 class Product_public extends CI_Model{

  		

/*
		public function getallproduct(){

	 		  $query=$this->db->select('*')
	 						->from('tbl_product')
	 						->limit(16)
	 						->get();

	 			return $query->result();	
	 				}*/

		public function maximum_percentage(){

		 		  $query=$this->db->select('*')
		 						->from('tbl_product')
		 						->order_by('percentage','DESC')
		 						->limit(8)
		 						->OFFSET(1)
		 						->get();

		 			return $query->result();	

		 			/*SELECT * FROM tbl_product ORDER BY percentage DESC LIMIT 4 OFFSET 1*/
		 				}

		 	public function Offer_end_products(){

		 		  $query=$this->db->select('*')
		 						->from('tbl_product')
		 						->order_by('end_date','ASC')
		 						->limit(4)
		 						->OFFSET(1)
		 						->get();

		 			return $query->result();	

		 			
		 				}

 		public function getallproduct(){

 		  $query=$this->db->select('*')
 						->from('tbl_product')
 						->limit(16)
 						->get();

 			return $query->result();	
 				}




 	public function getallproducts(){

 		$query=$this->db->select('*')
 						->from('tbl_product')
 						->where('cat_id', '26')
 						->get();

 			return $query->result();	
 				}


 	public function get_all_desktop(){


 		$query=$this->db->select('*')
 						->from('tbl_product')
 						->where('cat_id', '24')
 						->get();

 			return $query->result();

 				}
 		public function get_all_monitor(){

 					$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('cat_id', '25')
	 						->get();

 						return $query->result();

 				}

	 	public function get_all_smart_phone(){

	 				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();

				}

				public function get_all_Cell_phone(){

				$query=$this->db->select('*')
						->from('tbl_product')
						->where('cat_id', '29')
						->get();

					return $query->result();

					}

			public function get_all_tablet(){

				$query=$this->db->select('*')
						->from('tbl_product')
						->where('cat_id', '30')
						->get();

					return $query->result();

			}
	  public function view_samsung(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '5')
	 						->get();

	 					return $query->result();
			
				}

		public function view_all_products(){
			$query=$this->db->select('*')
							->from('tbl_product')
							->get();

							return $query->result();
				}

		  public function view_product_details($product_id){

                $query=$this->db->select('*')
                         ->from('tbl_product')
                         ->where('id', $product_id)
                         ->get();

                return $query->row();

   			 }


	   public function view_Computer_samsung(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}

	   public function view_Computer_Apple(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}

		 public function view_Computer_Asus(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '16')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Computer_HP(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '13')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Computer_Dell(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '2')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Computer_Acer(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '14')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Computer_Intel(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '15')
	 						->where('cat_id', '24')
	 						->get();

	 					return $query->result();
			
		}

		/*model for laptop*/


		public function view_Laptop_samsung(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}

	   public function view_Laptop_Apple(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}


		 public function view_Laptop_Asus(){
	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '16')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Laptop_HP(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '13')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Laptop_Dell(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '2')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Laptop_Acer(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '14')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Laptop_Doel(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '24')
	 						->where('cat_id', '26')
	 						->get();

	 					return $query->result();
			
		}

		/*model for minitor*/

		public function view_monitor_samsung(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}

	   public function view_monitor_Apple(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}


		 public function view_monitor_Asus(){
	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '16')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_monitor_HP(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '13')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_monitor_Dell(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '2')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_Monitor_Acer(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '14')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}
		 public function view_monitor_Sony(){

	  	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '7')
	 						->where('cat_id', '25')
	 						->get();

	 					return $query->result();
			
		}

		/*model for mobile*/

		 public function view_mobile_Apple(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_mobile_Samsung(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_mobile_Nokia(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '17')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_mobile_HTC(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '18')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		 public function view_mobile_Huawei(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '19')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		 public function view_mobile_Walton(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '20')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		 public function view_mobile_Sony(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '7')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		}
		

		 public function view_mobile_Oppo(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '21')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
				}
				
		 public function view_mobile_Micromax(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '22')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
				}
		 public function view_mobile_Symphoni(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '23')
	 						->where('cat_id', '31')
	 						->get();

	 					return $query->result();
		
		}

		/*function for cell phone*/

		
 public function view_cell_phone_Apple(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_cell_phone_Samsung(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_cell_phone_Nokia(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '17')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_cell_phone_HTC(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '18')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		 public function view_cell_phone_Huawei(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '19')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		 public function view_cell_phone_Walton(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '20')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		 public function view_cell_phone_Sony(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '7')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}
		

		 public function view_cell_phone_Oppo(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '21')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
				}
				
		 public function view_cell_phone_Micromax(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '22')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
				}
		 public function view_cell_phone_Symphoni(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '23')
	 						->where('cat_id', '29')
	 						->get();

	 					return $query->result();
		}



/*model for tablet pc*/

		 public function view_tablet_phone_Apple(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '3')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_tablet_phone_Samsung(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '1')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_tablet_phone_Nokia(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '17')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		
		 public function view_tablet_phone_HTC(){

    			$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '18')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		 public function view_tablet_phone_Huawei(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '19')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		 public function view_tablet_phone_Walton(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '20')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		 public function view_tablet_phone_Sony(){

    		$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '7')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}
		

		 public function view_tablet_phone_Oppo(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '21')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
				}
				
		 public function view_tablet_phone_Micromax(){

		    	$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '22')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
				}
		 public function view_tablet_phone_Symphoni(){
				$query=$this->db->select('*')
	 						->from('tbl_product')
	 						->where('brand_id', '23')
	 						->where('cat_id', '30')
	 						->get();

	 					return $query->result();
		}


		


 }	
