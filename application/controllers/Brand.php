<?php 

	class Brand extends CI_Controller{

		 public function __construct() {
            parent::__construct();
            $this->load->model('Brand_model');
             if(! $this->session->userdata('logged_in')){
        	return redirect('admin');
       }
                
        }


         public function brandadd(){

         	
            $this->form_validation->set_rules('brandName', 'Brand Name', 'trim|required|is_unique[tbl_brand.brandName]');

            if ($this->form_validation->run() == FALSE) {
               $this->load->view('admin/brand_add');
              }
              else{
                $data= array(
                  
                  'brandName' => $this->input->post('brandName')
                  );
                  

                 $this->Brand_model->brandadd($data);
                   $this->session->set_flashdata('feedback', "Data Added successfully");
                 //$data['message'] = 'Data Inserted Successfully';
                 $this->load->view('admin/brand_add', $data);

              }

       
    }

    public function brandlist(){
      $this->load->library('pagination');

        $config=[
            'base_url'          => base_url('Brand/brandlist'),
            'per_page'          => 6,
            'total_rows'        => $this->Brand_model->num_rows(),
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

        $brands=$this->Brand_model->brandlist($config['per_page'],$this->uri->segment(3));

        $this->load->view('admin/brand_list', ['brands'=>$brands]);
    }

    public function brand_edit($brand_id){
       //$this->load->model('Brand_model','Brand_model');
      
    	 $brands=$this->Brand_model->find_brand($brand_id);
       $this->load->view('admin/brand_edit',['brand'=>$brands]);
      
    }



public function update_brand($brand_id){
   
       $this->form_validation->set_rules('catName', 'Category Name', 'trim');

         if ($this->form_validation->run() == FALSE) {

              return redirect('Brand/brand_edit');

              }
              else{
                $data= array( 'brandName' => $this->input->post('brandName')); 
              
                unset( $data['submit']);
                $brands= $this->Brand_model->update_brand($brand_id,$data);

                $this->session->set_flashdata('feedback', "Brand updated successfully");
                 //$data['message'] = 'Data Updated seccessfully';
                 
                $brands=$this->Brand_model->find_brand($brand_id);
                $this->load->view('admin/brand_edit',['brand'=>$brands]);

              }

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