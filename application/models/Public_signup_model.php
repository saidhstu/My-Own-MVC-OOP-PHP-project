<?php

	class Public_signup_model extends CI_Model{
  
					
				function check_username($userName)
				{
								   
				     $this->db->where('username', $userName);
				     $this->db->from('tbl_user');
				     $query= $this->db->get();
				     if($query->num_rows() > 0){
				      return true;
				      }else{
				         return false;
				         }
				      }
                 
				


  		public function public_signup_add($data){
		
		  $this->db->insert('tbl_user', $data);
        
		}


			public function login($username,$password){

			    $this->db->select('user_id,user_id');
			    $this->db->where('username',$username);
			    $this->db->where('password',$password);
			    $q = $this->db->get('tbl_user');

			    if($q->num_rows()>0){
			        return $q->row_array();
			    }else{
			        return false;
			    }
			}
	/*public function login($data) {


				$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
				$this->db->select('*');
				$this->db->from('tbl_user');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}*/

/*public function login($username, $password) {
    $user = $this->db
        ->select('*')
        ->where(
             [
                'username' => $username,
                'password' => md5($password)
             ]
         )
        ->get("table_name")
        ->row();

   if ($user) {
         $logindata = [
             'username' => $user->username,
             'password'   => $user->password,
             'user_id'  => $user->user_id
         ];
         $this->session
              ->set_userdata($logindata);
         return true;
   }
   else {
         return false;
   }
} */

				
		public function read_user_information($username) {

				$condition = "username =" . "'" . $username . "'";
				$this->db->select('*');
				$this->db->from('tbl_user');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
				return $query->result();
				} else {
				return false;
				}
				}

  		public function check_public_login($username, $password){


		     

                 $this->db->select('*');
             	 $this->db->from('tbl_user');
                 $this->db->where('username',$username);
                 $this->db->where('password',$password);

 
				  if($query=$this->db->get())
				  {
				      return $query->row_array();
				  }
				  else{
				    return false;
				  }


     
		

				}



















	}