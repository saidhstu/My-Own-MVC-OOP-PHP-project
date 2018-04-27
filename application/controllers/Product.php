<?php

	class Product extends CI_Controller{

			public function __construct() {
		            parent::__construct();
		            $this->load->model('Product_model');
		             if(! $this->session->userdata('logged_in')){
		        	return redirect('admin');
		        }

			}


		 public function productadd(){

            $this->form_validation->set_rules('productName', 'Product Name', 'trim|stripcslashes');
            $this->form_validation->set_rules('textarea', 'Text-area', 'trim|stripcslashes');

             $brands=$this->Product_model->brandlist();
             $categories=$this->Product_model->categorylist();


           $this->load->view('admin/product_add',['brands'=>$brands,'categories'=>$categories]);
  
     	}


      public function add(){


        if($this->input->post('submit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            

             $start_date = $this->input->post('start_date');
             $start_date = date("Y-m-d", strtotime($start_date));
             $end_date   = $this->input->post('end_date');
             $end_date   = date("Y-m-d", strtotime($end_date));
            //Prepare array of user data
            $data = array(

                  'productName'     => $this->input->post('productName'),
                  'cat_id'          => $this->input->post('id'),
                  'brand_id'        => $this->input->post('brand_id'),
                  'description'     => $this->input->post('textarea'),
                  'main_price'      => $this->input->post('price'),
                  'percentage'      => $this->input->post('percentage'),
                  'offer_price'     => $this->input->post('offer'),
                  'source'          => $this->input->post('source'),
                  'start_date'      => $start_date,
                  'end_date'        => $end_date,
                  'images'          => $picture
            );

            //Pass user data to model
            $data = $this->Product_model->addproduct($data);
           
            //Storing insertion status message.
            if($data){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }
             $brands=$this->Product_model->brandlist();
             $categories=$this->Product_model->categorylist();
      
        $this->load->view('admin/product_add',['brands'=>$brands,'categories'=>$categories]);
    }

   public function productlist(){
      $this->load->library('pagination');

        $config=[
            'base_url'          => base_url('Product/productlist'),
            'per_page'          => 7,
            'total_rows'        => $this->Product_model->num_rows(),
            'full_tag_open'     =>"<ul class='pagination'><li class='page-item disabled'>",
            'full_tag_close'    =>'</li></ul>',
            'first_link_open'    =>"<a class='page-link disabled'>",
            'last_link_close'    =>'</li>',
            'next_tag_open'     =>"<li class='page-item'><a class='page-link'",
            'next_tag_close'    =>'</a></li>',
            'prev_tag_open'     =>"<li class='page-item'><a class='page-link'",
            'prev_tag_close'    =>'</a></li>',
            'num_tag_open'      =>"<li class='page-item'><a class='page-link'",
            'num_tag_close'     =>'</a></li>',
            'cur_tag_open'      =>"<li class='page-item active'><a class='page-link'>",
            'cur_tag_close'     =>'</a></li>',

        ];


        $this->pagination->initialize($config);

        $products=$this->Product_model->productlist($config['per_page'],$this->uri->segment(3));

        $this->load->view('admin/product_list', ['products'=>$products]);
    }


    public function product_edit($product_id){

             $brands=$this->Product_model->brandlist();
             $categories=$this->Product_model->categorylist();
           
           $products=$this->Product_model->find_product($product_id);
         
           $this->load->view('admin/product_edit',['products'=>$products,'brands'=>$brands,'categories'=>$categories]);
          
        }



public function update_product($product_id){
   
      if($this->input->post('submit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
               
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){

                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //Prepare array of user data
            $data = array(

                  'productName'     => $this->input->post('productName'),
                  'cat_id'          => $this->input->post('id'),
                  'brand_id'        => $this->input->post('brand_id'),
                  'description'     => htmlspecialchars($this->input->post('textarea',false)),
                  'main_price'      => $this->input->post('price'),
                  'percentage'      => $this->input->post('percentage'),
                  'offer_price'     => $this->input->post('offer_price'),
                  'source'          => $this->input->post('source'),
                  'images'          => $picture
            );
            
            //Pass user data to model
            $data = $this->Product_model->update_product($product_id,$data);
           
            //Storing insertion status message.
            if($data){
                $this->session->set_flashdata('success_msg', ' Product Updated successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Product Updated Failed.');
            }
        }
      $brands=$this->Product_model->brandlist();
             $categories=$this->Product_model->categorylist();
           
        $this->load->view('admin/product_edit',['products'=>$data]);



    }


  public function update()
    {
        $id=$this->input->post("id");

        $s_em=$this->input->post("s_em");
        $s_na=$this->input->post("s_na");


 if($_FILES[file]['name']!="")
            {
    $config['upload_path'] = './uploads/';
        $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $upload_data=$this->upload->data();
            $image_name=$upload_data['file_name'];
        }
    }
    else{
                $image_name=$this->input->post('old');
            }


$data=array('s_em'=>$s_em,'s_na'=>$s_na,'file'=>$image_name);
$this->Students_m->db_update($data,$id);
}





    public function delete_brand(){
      $brand_id=($this->input->post('brand_id'));
      if($this->Brand_model->delete_brand( $brand_id)){
        $this->session->set_flashdata('feedback', "Brand Deleted successfully.");
      }
      else{
        $this->session->set_flashdata('feedback', "Brand Deleted Failed.");
      }

      return redirect('Brand/brandlist');
    }


}