<?php 

	class Public_product_add_model extends CI_Model{

           public function __construct() {
                parent::__construct();
            
                 if(! $this->session->userdata('logged_in')){
              return redirect('Public_login');
            }

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

                        $a= $this->session->userdata('logged_in');
                        $user_id=($a['user_id']);
                       

                        $query=$this->db->select('tbl_product.id,tbl_product.productName, tbl_category.catName, tbl_brand.brandName, main_price,offer_price,images,percentage')
                              ->from('tbl_product')
                              ->where('user_id', $user_id)
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


              public function delete_product($product_id){

          return $this->db->delete('tbl_product',['id'=>$product_id]);

    }


               public function find_product($product_id){

                $query=$this->db->select('*')
                         ->from('tbl_product')
                         ->where('id', $product_id)
                         ->get();

                return $query->row();

    }



}
