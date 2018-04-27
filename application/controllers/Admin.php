<?php
 
 	class Admin extends CI_Controller{



 		public function index(){

      if( $this->session->userdata('user_id') )

      return redirect('Admin_dashboard/dashboard');
    
      $this->load->helper('form');

       $this->load->view('admin/login');

 		
 		   }

 
 		//public function admin_login_check(){
           
               public function admin_login_check() {

                            $this->load->model('Loginmodel');
                          $this->form_validation->set_rules('username', 'Username', 'trim|required');
                          $this->form_validation->set_rules('password', 'Password', 'trim|required');

                          if ($this->form_validation->run() == FALSE) {

                          if(isset($this->session->userdata['logged_in'])){

                          //$this->load->view('admin/dashboard');
                             return redirect('Admin_dashboard/dashboard');

                          }else{
                          $this->load->view('admin/login');
                          }
                          } else {
                          $data = array(
                          'username' => $this->input->post('username'),
                          'password' => $this->input->post('password')
                          );
                          $result = $this->Loginmodel->login($data);
                          if ($result == TRUE) {

                          $username = $this->input->post('username');
                          $result = $this->Loginmodel->read_user_information($username);
                          if ($result != false) {
                          $session_data = array(
                          'username' => $result[0]->username,
                          'password' => $result[0]->password,
                          );
                          // Add user data in session
                          $this->session->set_userdata('logged_in', $session_data);
                           return redirect('Admin_dashboard/dashboard');

                          //$this->load->view('admin/dashboard');
                          }
                          } else {
                          $data = array(
                          'error_message' => 'Username or Password does not match'
                          );
                          $this->load->view('admin/login', $data);
                          }
                 }


         } 


         public function admin_logout(){
             
         $this->session->unset_userdata('logged_in');
				return redirect('Admin');
         }


 		
 	}