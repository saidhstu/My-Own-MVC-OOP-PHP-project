<?php
 class Category extends CI_Controller{

     public function __construct(){
            parent::__construct();
            $this->load->model('Category_model');
             if(! $this->session->userdata('logged_in')){
          return redirect('admin');
       }
                
        }

  
            
 public function catadd(){

         	
            $this->form_validation->set_rules('catName', 'Category Name', 'trim|required|is_unique[tbl_category.catName]');

            if ($this->form_validation->run() == FALSE) {
               $this->load->view('admin/catadd');
              }
              else{
                $data= array(
                  
                  'catName' => $this->input->post('catName')
                  );
                  

                 $this->Category_model->catadd($data);
                   $this->session->set_flashdata('feedback', "Data Added successfully");
                 //$data['message'] = 'Data Inserted Successfully';
                 $this->load->view('admin/catadd', $data);

              }


    


		}

   public function catlist(){
      $this->load->library('pagination');

        $config=[
            'base_url'          => base_url('Category/catlist'),
            'per_page'          => 6,
            'total_rows'        => $this->Category_model->num_rows(),
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

        $categories=$this->Category_model->categorylist($config['per_page'],$this->uri->segment(3));

        $this->load->view('admin/catlist', ['categories'=>$categories]);
    }



  public function edit_category($cat_id){
      
    	 $catagory=$this->Category_model->find_category($cat_id);
       $this->load->view('admin/cat_edit',['cat'=>$catagory]);
      
    }

    public function update_category($cat_id){
    

       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_rules('catName', 'Category Name', 'trim');

         if ($this->form_validation->run() == FALSE) {

              return redirect('Category/edit_category');

              }
              else{
                $data= array( 'catName' => $this->input->post('catName')); 
                //$cat_id = $this->input->post('cat_id');
               // echo $cat_id;die;
                unset( $data['submit']);
                $categories= $this->Category_model->update_cat($cat_id,$data);

                $this->session->set_flashdata('feedback', "Data updated successfully");
                 //$data['message'] = 'Data Updated seccessfully';
                 
                $catagory=$this->Category_model->find_category($cat_id);
                
                $this->load->view('admin/cat_edit',['cat'=>$catagory]);

              }

    }




    public function delete_category(){

            $cat_id=($this->input->post('cat_id'));

              if($this->Category_model->delete_cat( $cat_id)){
                $this->session->set_flashdata('feedback', "Category Deleted successfully.");
              }
              else{
                $this->session->set_flashdata('feedback', "Category Deleted Failed.");
              }

      return redirect('Category/catlist');
    }



 }