<?php
/**
 * 
 */
class Index extends MController{
	
	public function __construct(){
		parent::__construct();
	}

	public function Index(){
		$this->home();
	}

	public function home(){
		$data = array();
		$tablePost = "post";
		$tableCat  = "catagory";
		$this->load->view("header");

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);
		$this->load->view("search", $data);

		$Postmodel = $this->load->model("Postmodel");
		$data['allPost'] = $Postmodel->getAllPost($tablePost);
		$this->load->view("content", $data);

		
		
		//$data['catlist'] = $catModel->catList($tableCat);
		$data['latestPost'] = $Postmodel->getLatestPost($tablePost);

		$this->load->view("sidebar", $data);
		$this->load->view("footer");
		
	}

	public function postDetails($id){
		$data = array();
		$tablePost = "post";
		$tableCat  = "catagory";
		$this->load->view("header");

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);
		$this->load->view("search", $data);


		$Postmodel = $this->load->model("Postmodel");
		$data['postbyid'] = $Postmodel->getPostById($tablePost, $tableCat, $id);
		$this->load->view("details", $data);



		$data['latestPost'] = $Postmodel->getLatestPost($tablePost);
		$this->load->view("sidebar", $data);
		$this->load->view("footer");
	}
	public function postByCat($id){
		$data = array();
		$tablePost = "post";
		$tableCat  = "catagory";
		$this->load->view("header");

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);
		$this->load->view("search", $data);

		$Postmodel = $this->load->model("Postmodel");
		$data['getcat'] = $Postmodel->getPostByCat($tablePost, $tableCat, $id);
		$this->load->view("postbycat", $data);


		$data['latestPost'] = $Postmodel->getLatestPost($tablePost);
		$this->load->view("sidebar", $data);
		$this->load->view("footer");
	}

	public function search(){
		$data = array();
		$keyword = $_REQUEST['keyword'];
		$cat     = $_REQUEST['cat'];

		$tablePost = "post";
		$tableCat  = "catagory";
		$this->load->view("header");

		$catModel = $this->load->model("CatModel");
		$data['catlist'] = $catModel->catList($tableCat);
		$this->load->view("search", $data);

		$Postmodel = $this->load->model("Postmodel");
		$data['postbysearch'] = $Postmodel->getPostBySearch($tablePost, $keyword, $cat);
		$this->load->view("sresult", $data);


		$data['latestPost'] = $Postmodel->getLatestPost($tablePost);
		$this->load->view("sidebar", $data);
		$this->load->view("footer");
	}
}

?>

