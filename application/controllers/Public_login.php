<?php 


	class Public_login extends CI_Controller{


          public function __construct() {
            parent::__construct();
            $this->load->model('Public_signup_model');
            
              
        }

 		public function index(){
 			  $this->load->view('public/public_login');
 		   }


		public function check_public_login(){

         

          $this->form_validation->set_rules('username', 'Username', 'trim|required');
          $this->form_validation->set_rules('password', 'Password', 'trim|required');

          if ($this->form_validation->run() == FALSE) {

                        if(isset($this->session->userdata['logged_in'])){
                        $this->load->view('public/public_dashboard');
                        }
                        else{
                        $this->load->view('public/public_login');
                        }
             }

           else {

       
          $username = $this->input->post('username');
          $password = $this->input->post('password');

        
          $result = $this->Public_signup_model->login($username,$password);


          if ($result == TRUE) {

                  $username = $this->input->post('username');
                  $result = $this->Public_signup_model->read_user_information($username);
                 
                 

                  if ($result != false) {
                  $session_data = array(
                 'username' => $result[0]->username,
                  'password' => $result[0]->password,
                  'user_id' => $result[0]->user_id,
                  );
                  //print_r($session_data['user_id']);

          // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                $this->load->view('public/public_dashboard');
                }

                } 

                else {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('public/public_login', $data);
                }
          }
          


			 
 		}
         

                    public function logout() {

              $sess_array = array(
              'username' => ''
              );
              $this->session->unset_userdata('logged_in', $sess_array);
              $data['message_display'] = 'Successfully Logout';
              $this->load->view('public/public_login', $data);
              }



  
	}