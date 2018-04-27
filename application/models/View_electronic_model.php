<?php

 class View_electronic_model extends CI_Model{


 	public function get_all_electronic_product(){


 		$query=$this->db->select('*')
 						->from('tbl_product')
 						->where('cat_id', '24')
 						->get();

 			return $query->result();

 	
 	}




 }