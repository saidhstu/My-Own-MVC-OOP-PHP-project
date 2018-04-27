<?php

	class  Category_model extends CI_Model{



		public function catadd($data){

				$this->db->insert('tbl_category', $data);
			}



			public function categorylist($limit, $offset){

                $query= $this->db
                				 ->select('*')
                				 ->from('tbl_category')          				 
                				 ->limit($limit, $offset)
                				 ->get();
                     return $query->result();

		}

    public function num_rows(){

    	 		$query= $this->db
                				 ->select('*')
                				 ->from('tbl_category')
                				 ->get();
                     return $query->num_rows();
    }

     public function find_category($cat_id){

    	$query=$this->db->select(['id','catName'])
    			 ->where('id', $cat_id)
    			 ->get('tbl_category');

    	return $query->row();

    }


    public function update_cat($cat_id, Array $data){

    		return $this->db
    				->select('*')
    				->where('id',$cat_id)
    				->update('tbl_category',$data);

    }

 /*public function update_brand($brand_id, Array $data){

	    		return $this->db
	    				->select('*')
	    				->where('id',$brand_id)
	    				->update('tbl_brand',$data);

    }*/


    public function delete_cat($cat_id){

    		return $this->db->delete('tbl_category',['id'=>$cat_id]);

    }




	}