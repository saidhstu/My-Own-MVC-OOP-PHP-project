<?php

	class Brand_model extends CI_Model{
        

			public function brandadd($data){

				$this->db->insert('tbl_brand', $data);
			}
	public function brandlist($limit, $offset){

                $query= $this->db
                				 ->select('*')
                				 ->from('tbl_brand')          				 
                				 ->limit($limit, $offset)
                				 ->get();
                     return $query->result();

		}

    public function find_brand($brand_id){

		    	$query=$this->db->select(['id','brandName'])
		    			 ->where('id', $brand_id)
		    			 ->get('tbl_brand');

		    	return $query->row();

    }


    public function update_brand($brand_id, Array $data){

	    		return $this->db
	    				->select('*')
	    				->where('id',$brand_id)
	    				->update('tbl_brand',$data);

    }


    public function delete_brand($brand_id){

    			return $this->db->delete('tbl_brand',['id'=>$brand_id]);

    }

    public function num_rows(){

    	 		$query= $this->db
                				 ->select('*')
                				 ->from('tbl_category')
                				 ->get();
                     return $query->num_rows();
    }
 

	}