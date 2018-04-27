<?php 
class User extends CI_Controller{




	public function index(){
		
		//$this->load->view('public/index');


            $this->load->model('Product_public');

			$getproducts=$this->Product_public->maximum_percentage();
			$last_dates=$this->Product_public->Offer_end_products();
		
			$this->load->view('public/index',['getproducts'=>$getproducts,'last_dates'=>$last_dates]);
		


}

}