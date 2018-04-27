<?php

	class View_product extends CI_Controller{
		
		
                 public function __construct() {
              parent::__construct();
            $this->load->model('Product_public');
             
              
        }


                
		public function getallproduct(){

            $this->load->model('Product_public');
			$getprod=$this->Product_public->maximum_percentage();

			$this->load->view('public/index',['getprod'=>$getprod]);
		}



		public function laptop(){

            $this->load->model('Product_public');
			$getproducts=$this->Product_public->getallproducts();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
		}


		public function view_samsung(){

			$getproducts=$this->Product_public->view_samsung();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);

		}


		public function desktop(){

           $this->load->model('Product_public');
	
			$getproduct=$this->Product_public->get_all_desktop();

			$this->load->view('public/Desktop',['getproducts'=>$getproduct]);

		}
		public function monitor(){

          $this->load->model('Product_public');
	
			$getproducts=$this->Product_public->get_all_monitor();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);

		}

		public function smart_phone(){

          
	
			$getproducts=$this->Product_public->get_all_smart_phone();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);

		}

		public function tablet_phone(){

            $getproducts=$this->Product_public->get_all_tablet();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);

		}
		public function cell_phone(){

            $getproducts=$this->Product_public->get_all_Cell_phone();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);

		}

        public function View_index_details($product_id){

			$getproducts=$this->Product_public->view_product_details($product_id);

			$this->load->view('public/index_details',['getproducts'=>$getproducts]);
		}
		

		public function View_computer_details($product_id){

			$getproducts=$this->Product_public->view_product_details($product_id);

			$this->load->view('public/Computer_details',['getproducts'=>$getproducts]);
		}
		

		public function View_smartphone_details($product_id){

			$getproducts=$this->Product_public->view_product_details($product_id);

			$this->load->view('public/mobile_details',['getproducts'=>$getproducts]);
		}


		public function view_Computer_samsung(){

	  	   $getproducts=$this->Product_public->view_Computer_samsung();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
			
		}

	   public function view_Computer_Apple(){

			  $getproducts=$this->Product_public->view_Computer_Apple();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
			
		}
		 public function view_Computer_Intel(){

	  	 $getproducts=$this->Product_public->view_Computer_Intel();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
			
		}

		 public function view_Computer_Asus(){

	   		 $getproducts=$this->Product_public->view_Computer_Asus();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
		}
		 public function view_Computer_HP(){

	  	   $getproducts=$this->Product_public->view_Computer_HP();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
		}
		 public function view_Computer_Dell(){

	   		$getproducts=$this->Product_public->view_Computer_Dell();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
			
		}
		 public function view_Computer_Acer(){

    		 $getproducts=$this->Product_public->view_Computer_Acer();

			$this->load->view('public/Desktop',['getproducts'=>$getproducts]);
		}

		

		/*laptop brand below*/

		public function view_Laptop_samsung(){

	  	   $getproducts=$this->Product_public->view_Laptop_samsung();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
			
		}

	   public function view_Laptop_Apple(){

			  $getproducts=$this->Product_public->view_Laptop_Apple();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
			
		}
		
		 public function view_Laptop_Asus(){

	   		 $getproducts=$this->Product_public->view_Laptop_Asus();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
		}
		 public function view_Laptop_HP(){

	  	   $getproducts=$this->Product_public->view_Laptop_HP();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
		}
		 public function view_Laptop_Dell(){

	   		$getproducts=$this->Product_public->view_Laptop_Dell();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
			
		}
		 public function view_Laptop_Acer(){

    		 $getproducts=$this->Product_public->view_Laptop_Acer();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
		}
		 public function view_Laptop_Doel(){

	  	 $getproducts=$this->Product_public->view_Laptop_Doel();

			$this->load->view('public/Laptop',['getproducts'=>$getproducts]);
			
		}

		
		/*monitor controller bellow*/

		public function view_monitor_samsung(){

	  	   $getproducts=$this->Product_public->view_Computer_samsung();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
			
		}


	   public function view_monitor_Apple(){

			  $getproducts=$this->Product_public->view_monitor_Apple();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
			
		}
		 public function view_monitor_Sony(){

	  	 $getproducts=$this->Product_public->view_monitor_Intel();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
			
		}

		 public function view_monitor_Asus(){

	   		 $getproducts=$this->Product_public->view_monitor_Asus();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
		}
		 public function view_monitor_HP(){

	  	   $getproducts=$this->Product_public->view_monitor_HP();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
		}
		 public function view_monitor_Dell(){

	   		$getproducts=$this->Product_public->view_monitor_Dell();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
			
		}

		 public function view_Monitor_Acer(){

    		 $getproducts=$this->Product_public->view_Monitor_Acer();

			$this->load->view('public/Monitor',['getproducts'=>$getproducts]);
		}


	/*	for mobile brand*/


		 public function view_mobile_Apple(){

    		 $getproducts=$this->Product_public->view_mobile_Apple();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_mobile_Samsung(){

    		 $getproducts=$this->Product_public->view_mobile_Samsung();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_mobile_Nokia(){

    		 $getproducts=$this->Product_public->view_mobile_Nokia();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_mobile_HTC(){

    		 $getproducts=$this->Product_public->view_mobile_HTC();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		 public function view_mobile_Huawei(){

    		 $getproducts=$this->Product_public->view_mobile_Huawei();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		 public function view_mobile_Walton(){

    		 $getproducts=$this->Product_public->view_mobile_Walton();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		 public function view_mobile_Sony(){

    		 $getproducts=$this->Product_public->view_mobile_Sony();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}
		

		 public function view_mobile_Oppo(){

		    		 $getproducts=$this->Product_public->view_mobile_Oppo();

					$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
				}
				
		 public function view_mobile_Micromax(){

		    		 $getproducts=$this->Product_public->view_mobile_Micromax();

					$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
				}
				 public function view_mobile_Symphoni(){

    		 $getproducts=$this->Product_public->view_mobile_Symphoni();

			$this->load->view('public/smart_phone',['getproducts'=>$getproducts]);
		}

		/*section for cell phone*/
		
		 public function view_cell_phone_Apple(){

    		 $getproducts=$this->Product_public->view_cell_phone_Apple();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_cell_phone_Samsung(){

    		 $getproducts=$this->Product_public->view_cell_phone_Samsung();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_cell_phone_Nokia(){

    		 $getproducts=$this->Product_public->view_cell_phone_Nokia();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_cell_phone_HTC(){

    		 $getproducts=$this->Product_public->view_cell_phone_HTC();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		 public function view_cell_phone_Huawei(){

    		 $getproducts=$this->Product_public->view_cell_phone_Huawei();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		 public function view_cell_phone_Walton(){

    		 $getproducts=$this->Product_public->view_cell_phone_Walton();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		 public function view_cell_phone_Sony(){

    		 $getproducts=$this->Product_public->view_cell_phone_Sony();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		

		 public function view_cell_phone_Oppo(){

		    		 $getproducts=$this->Product_public->view_cell_phone_Oppo();

					$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
				}
				
		 public function view_cell_phone_Micromax(){

		    		 $getproducts=$this->Product_public->view_cell_phone_Micromax();

					$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
				}
				 public function view_cell_phone_Symphoni(){

    		 $getproducts=$this->Product_public->view_cell_phone_Symphoni();

			$this->load->view('public/cell_phone',['getproducts'=>$getproducts]);
		}
		

	/*	function for tablet pc*/

		 public function view_tablet_phone_Apple(){

    		 $getproducts=$this->Product_public->view_tablet_phone_Apple();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_tablet_phone_Samsung(){

    		 $getproducts=$this->Product_public->view_tablet_phone_Samsung();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_tablet_phone_Nokia(){

    		 $getproducts=$this->Product_public->view_tablet_phone_Nokia();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		
		 public function view_tablet_phone_HTC(){

    		 $getproducts=$this->Product_public->view_tablet_phone_HTC();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		 public function view_tablet_phone_Huawei(){

    		 $getproducts=$this->Product_public->view_tablet_phone_Huawei();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		 public function view_tablet_phone_Walton(){

    		 $getproducts=$this->Product_public->view_cell_phone_Walton();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		 public function view_tablet_phone_Sony(){

    		 $getproducts=$this->Product_public->view_tablet_phone_Sony();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		

		 public function view_tablet_phone_Oppo(){

		    		 $getproducts=$this->Product_public->view_tablet_phone_Oppo();

					$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
				}
				
		 public function view_tablet_phone_Micromax(){

		    		 $getproducts=$this->Product_public->view_cell_phone_Micromax();

					$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
				}
				 public function view_tablet_phone_Symphoni(){

    		 $getproducts=$this->Product_public->view_cell_phone_Symphoni();

			$this->load->view('public/tablet_phone',['getproducts'=>$getproducts]);
		}
		


				

		




	}