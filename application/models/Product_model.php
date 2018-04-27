<?php

	class Product_model extends CI_Model{


            function __construct() {
                    $this->tableName = 'tbl_product';
                    $this->primaryKey = 'id';
                }



		public function brandlist(){
                $query= $this->db
                				 ->select('*')
                				 ->from('tbl_brand')          				 
                				 ->get();
                     return $query->result();

		}

		public function categorylist(){

                $query= $this->db
                				 ->select('*')
                				 ->from('tbl_category')          				 
                				 ->get();
                     return $query->result();

		}

            public function addproduct($data){
                /*echo "<pre>";
                 print_r($data);die;*/

           if(!array_key_exists("created",$data)){
                $data['created'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists("modified",$data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            $insert = $this->db->insert('tbl_product', $data);
            if($insert){
                return $this->db->insert_id();
            }else{
                return false;    
            }
     }


             public function productlist($limit, $offset){

              
                    $query=$this->db->select('tbl_product.id,tbl_product.productName, tbl_category.catName, tbl_brand.brandName, main_price,offer_price,images,percentage')
                              ->from('tbl_product')
                              ->join('tbl_category','tbl_category.id = tbl_product.cat_id','left')
                              ->join('tbl_brand','tbl_brand.id=tbl_product.brand_id','left')
                              ->limit($limit, $offset)
                              ->get();
                               return $query->result();


                              
                              
               /*  $this->db->limit($limit, $offset);

                $sql = " SELECT tbl_product.id,tbl_product.productName,tbl_category.catName,tbl_brand.brandName,main_price,offer_price,images
                         FROM tbl_product LEFT JOIN tbl_category ON tbl_category.id = tbl_product.cat_id 
                         LEFT JOIN tbl_brand ON tbl_brand.id=tbl_product.brand_id ";
                                              
                    $row = $this->db->query($sql);
                    return $row->result();*/



                   

               
             }

               public function find_product($product_id){

                $query=$this->db->select('*')
                         ->from('tbl_product')
                         ->where('id', $product_id)
                         ->get();

                return $query->row();

    }




                public function update_product($product_id, Array $data){

                            return $this->db
                                    ->select('*')
                                    ->where('id',$product_id)
                                    ->update('tbl_product',$data);

                }


                public function delete_product($product_id){

                            return $this->db->delete('tbl_product',['id'=>$product_id]);

                }

         public function num_rows(){

                        $query= $this->db
                                         ->select('*')
                                         ->from('tbl_product')
                                         ->get();
                                      
                             return $query->num_rows();
            }

		/*public function brand_cat_list($catName,$brand_name){
			$query=$this->db->select(['tbl_category.id','tbl_category.catName','tbl_brand.brandName', 'tbl_brand.id as brandId']   )


		}
*/
	}