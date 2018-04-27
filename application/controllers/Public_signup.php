<?php 

	class Public_signup extends CI_Controller{


		  public function __construct() {
            parent::__construct();
            $this->load->model('Public_signup_model');
            $this->load->library('javascript');
            
            $this->load->helper('email');

}
				 public function email_check()
				    {
				     
				  if($this->input->is_ajax_request()) {
				
				 $email = $this->input->post('email');
				 
				 if(!$this->form_validation->is_unique($email, 'tbl_user.email')) {
				 
			
				 $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'The email is already taken, choose another one')));
				
				}
				 }
				 }
				 
			  

		public function public_signup_add(){

            
                     $this->form_validation->set_rules('username', 'User Name', 'trim|required|callback_checkUserName|min_length[4]|max_length[15]');
                     $this->form_validation->set_rules('firstName', 'First Name', 'required');
                 	 $this->form_validation->set_rules('lastName', 'Last Name', 'required');
                	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                 	 $this->form_validation->set_rules('password', 'Passwprd', 'trim|required|min_length[6]|max_length[15]');
                  	 $this->form_validation->set_rules('password_confirm', 'Again Passwprd', 'trim|required|min_length[6]|max_length[15]|matches[password]');


			             if ($this->form_validation->run() == FALSE) {

			               $this->load->view('public/public_signup_form');
			              }

			              else{
			                $data= array(
			                  
			                   'username' => $this->input->post('username'),
			                   'firstName' => $this->input->post('firstName'),
			                   'lastName' => $this->input->post('lastName'),
			                   'email' => $this->input->post('email'),
			                   'password' => $this->input->post('password'),
			                   'password_confirm' => $this->input->post('password_confirm')

			                  );
			               

			                 


			                  $this->Public_signup_model->public_signup_add($data);
			                   $this->session->set_flashdata('feedback', "Thank you! You have successfully Registered");
			                 
			                 $this->load->view('public/public_signup_form', $data);

			                 }

			         }



			 public function checkUserName($userName)
			    {
			    if ($this->Public_signup_model->check_username($userName) == false) {
					    return true;
					  } else {
					    $this->form_validation->set_message('checkUserName', "This User Name already exist!");
					    return false;
					  }
			    

			     }
			        








  }
