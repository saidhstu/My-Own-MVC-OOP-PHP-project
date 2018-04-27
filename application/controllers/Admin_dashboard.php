<?php

	class Admin_dashboard extends CI_Controller{


			public function __construct() {
		            parent::__construct();
		            
		             if(! $this->session->userdata('logged_in')){
		        	return redirect('admin');
		        }

			}

				public function dashboard(){

				 		
				        $this->load->view('admin/dashboard');

					}


				public function social(){

				      $this->load->view('admin/social');
				    }

				  public function title(){

				      $this->load->view('admin/title');
				    }
				         
				   public function about_us(){

				   $this->load->view('admin/about_us');
				 }



       public function contact_us(){

             $this->load->view('admin/contact_us');
          }

		

	}