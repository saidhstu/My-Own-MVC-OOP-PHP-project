<?php

class Loginmodel extends CI_Model{


	

public function login_valid( $username,$password)
	{
     $password = md5($password);
        $q = $this->db->where(['username' => $username, 'pass' => $password])
                ->get('tbl_admin');
        if ($q->num_rows) {
                
            return $q->row()->id;
            //return TRUE;
        } else {
            return FALSE;
        }
	}
                    public function login($data) {

                    $condition = "username =" . "'" . $data['username'] . "' AND " . "pass =" . "'" . $data['password'] . "'";
                    $this->db->select('*');
                    $this->db->from('tbl_admin');
                    $this->db->where($condition);
                    $this->db->limit(1);
                    $query = $this->db->get();

                    if ($query->num_rows() == 1) {
                    return true;
                    } else {
                    return false;
                    }
                    }

                    // Read data from database to show data in admin page
                    public function read_user_information($username) {

                    $condition = "username =" . "'" . $username . "'";
                    $this->db->select('*');
                    $this->db->from('tbl_admin');
                    $this->db->where($condition);
                    $this->db->limit(1);
                    $query = $this->db->get();

                    if ($query->num_rows() == 1) {
                    return $query->result();
                    } else {
                    return false;
                    }
                    }

		

				







}