<?php


class Admin_login extends CI_Controller{

 public function __construct() {
            
                     parent::__construct();
                        // if( ! $this->session->userdata('user_id') )
                       // return redirect('Admin');
                      $this->load->model('Insert_model');
                      $this->load->helper('form');
                  }
  
	public function dashboard(){

 		
        $this->load->view('admin/dashboard');

	}

	
   



}